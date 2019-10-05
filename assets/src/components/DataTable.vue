  
<template>
  <div class="card  shadow mb-4">
    <div id="my_header" class="card-header bg-custom  py-3">
      <div class="row">
        <p class="lead">
          <h4 class="m-0 font-weight-bold  text-dark">User List :</h4>
        </p>
        <button  @click="addUser()" class="btn btn-primary ml-auto"><i class="fas fa-user-plus"></i> Add</button>
      </div>
    </div>
    <div class="card-body" >
     <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="u in tableData" @click="showSelectedValue(u)">
           <td> {{ u.id }}</td>
           <td> {{ u.name }}</td>
           <td> {{ u.email }}</td>
           <td>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary"><i class="fas fa-cog"></i></button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" @click="toggleDropdown($event,u)" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 45px, 0px);">
                  <a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i>  Edit User</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-user-minus"></i>  Delete User</a>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="add_user" class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light">Add User</h5>
        <button type="button" class="close  text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form @submit.prevent="submit">
        <div class="modal-body">
           <div class="alert alert-danger" v-if="errors.length > 0">
            
            <h1 class="lead text-dark" v-html="errors"> {{errors}} </h1>
           </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="font-weight-bold">User Name:</label>
                <input type="text" name="name" id="name" placeholder="User Name" class="form-control" 
                v-model="fields.name">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="font-weight-bold">User Email:</label>
                <input type="text" name="email" id="email" placeholder="User Email" class="form-control"
                v-model="fields.email">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="far fa-plus-square"></i> Add User</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

</template>
<script>
  export default {
    mounted() {

    },
    data() {
      return {
       fields: {},
       actions: 'adduser',
       tableData: [],
       errors: ''
     }
   },
   created() {
    return this.fetchData("listusers");
  },
  methods: {
    fetchData(url) {
      this.$axios.get(url)
      .then(data => {
        this.tableData = data.data
      })
    },
    showSelectedValue(record){
      /*if (event.target.classList.contains('btn__content')) return;
      console.log(record.name + ' ,' + record.email);*/
    },
    addUser(){
      this.errors='';
      $("#add_user").modal("show");
    },
    submit() {

      const formData = new FormData();
      formData.append('name', this.fields.name);
      formData.append('email', this.fields.email);

      this.$axios.post(this.actions, formData).then(response => {
        if($.isEmptyObject(response.data.error)){
          this.fields = {};
          this.errors = '';
          $('#add_user').modal('hide');

          //refresh datatable view
          this.fetchData("listusers");

        }
        else{
           this.errors = response.data.error;
        }
        
      }).catch(error => {

      });
    },
    toggleDropdown(event,userid){

      let id_user = Number($(event.target).closest('tr').find('td:eq(0)').text()),
      selectedAction = $(event.target).closest('a.dropdown-item').find('i').hasClass('fas fa-user-minus'); 
      
      if(selectedAction){
        console.log('i want to delete');
      }
      else{
        console.log('i want to edit');
      }

    }
  },
  name: 'DataTable'
}
</script>