
@extends('layouts.main') 
@section('content')

<!-- get data passed from controller using blade-->
<!--{{$name}}-->
<!-- DataTales Example -->

<div class="card  shadow mb-4">
  <div class="card-header bg-primary py-3">
    <p class="lead">
      <h4 class="m-0 font-weight-bold text-white">User List :</h4>
    </p>
  </div>

  <div class="card-body" id="app">
    <data-table></data-table>
  </div>

  @endsection
  