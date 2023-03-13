@extends('layouts.main')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Dashboard</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
      <div class="card card-hover">
        <div class="box bg-cyan text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
          <h6 class="text-white">Dashboard</h6>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
      <div class="card card-hover">
        <div class="box bg-success text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-cube"></i></h1>
          <h6 class="text-white">Items</h6>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
      <div class="card card-hover">
        <div class="box bg-warning text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
          <h6 class="text-white">Funds</h6>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
      <div class="card card-hover">
        <div class="box bg-danger text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-thumb-up"></i></h1>
          <h6 class="text-white">Transactions</h6>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-6">
      <div class="card card-hover">
        <div class="box bg-secondary text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
          <h6 class="text-white">Suppliers</h6>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-6">
      <div class="card card-hover">
        <div class="box bg-primary text-center">
          <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
          <h6 class="text-white">Customers</h6>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="row">
    <div class="col-md-12">
      <h5 class="card-title">Calender</h5>
      <div class="card">
        <div class="">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-body b-l calender-sidebar">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right sidebar -->
  <!-- ============================================================== -->
  <!-- .right-sidebar -->
  <!-- ============================================================== -->
  <!-- End Right sidebar -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection