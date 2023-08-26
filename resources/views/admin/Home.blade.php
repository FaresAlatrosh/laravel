@extends('layouts.admin.master')
@section('title','All Employees')
@section('css')
<link
      href="{{ URL::asset('assets/css/dataTables.bootstrap4.css') }}"
      rel="stylesheet"
    />
@endsection
@section("bread-crumb")
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('employees.create') }}">Add New</a></li>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
    @endsection
    @section("content")
          <!-- Start Page Content -->
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <h1 align="center">Home Page</h1>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

    @endsection
    @section('js')
    <script src="{{ URL::asset('assets/js/datatables.min.js') }}"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
    @endsection
