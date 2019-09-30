  
<template>
<div class="data-table">
   <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
        </tr>
      </thead>
      
      <tbody>
        <tr v-for="u in tableData" @click="showSelectedValue(u)">
         <td> {{ u.id }}</td>
         <td> {{ u.name }}</td>
         <td> {{ u.surname }}</td>
         <td> {{ u.email }}</td>
       </tr>
     </tbody>
   </table>
 </div>
 </div>
</template>
<script type="text/ecmascript-6">
export default {
  data() {
    return {
      tableData: []
    }
  },
  created() {
    return this.fetchData("listusers")
  },
  methods: {
    fetchData(url) {
      this.$axios.get(url)
        .then(data => {
          this.tableData = data.data
        })
    },
     showSelectedValue(record){
        if (event.target.classList.contains('btn__content')) return;
           console.log(record.name + ' ,' + record.surname + ' ,' + record.email);
    }
  },
  name: 'DataTable'
}
</script>