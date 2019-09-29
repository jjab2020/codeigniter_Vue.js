@extends('layouts.main') 
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
            <div class="card-body" id="app">
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
                    <tr v-for='u in users'  @click="showSelected(u)">
                       <td> @{{ u.id }}</td>
                       <td> @{{ u.name }}</td>
                       <td> @{{ u.surname }}</td>
                       <td> @{{ u.email }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
    </div>
 
@endsection