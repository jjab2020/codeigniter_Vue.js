
import 'jquery/dist/jquery.min.js';
import 'popper.js/dist/umd/popper.min.js';
import 'bootstrap/dist/js/bootstrap.min.js';
import 'startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js';
import 'startbootstrap-sb-admin-2/js/sb-admin-2.js';
import 'startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'select2';
import axios from 'axios';


import Vue from 'vue';
window.Vue = Vue;
Vue.prototype.$axios = axios;

import DataTable from './components/DataTable';

const app = new Vue({
  el:'#app',
  components: {
    DataTable
  }
});
