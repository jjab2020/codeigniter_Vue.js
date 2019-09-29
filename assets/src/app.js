import 'jquery/dist/jquery.min.js';
import 'popper.js/dist/umd/popper.min.js';
import 'bootstrap/dist/js/bootstrap.min.js';
import 'startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js';
import 'startbootstrap-sb-admin-2/js/sb-admin-2.js';
import 'startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'select2';
import axios from 'axios';

const Vue = require('vue');

var app = new Vue({
  el:'#app',
  data:{
   users: ''
 },
 mounted() {
  this.allRecords();
},
methods:{
  allRecords:function(){
   axios.get('listusers').then(response => {
    this.users = response.data
  })
   .catch(function (error) {
     console.log(error);
   });
 },
 showSelected(record){
  if (event.target.classList.contains('btn__content')) return;
  console.log(record.name + ' ,' + record.surname + ' ,' + record.email);
}

}

});
