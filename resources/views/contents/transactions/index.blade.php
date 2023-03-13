@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Transactions</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transactions</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-3">Transaction Data</h5>
          <a href="#" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <div class="table-responsive mt-3">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Supplier Name</th>
                  <th>Customer Name</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price Total</th>
                  <th>Transaction Status</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                {{-- <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr> --}}
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Supplier Name</th>
                  <th>Customer Name</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price Total</th>
                  <th>Transaction Status</th>
                  <th>Date</th>
                </tr>
              </tfoot>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection