@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Customers</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customers</li>
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
          <h5 class="card-title mb-3">Customer Data</h5>
          <a href="/customers/create" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <div class="table-responsive mt-3">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($customers as $customer)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $customer->code }}</td>
                  <td>{{ $customer->name }}</td>
                  <td>{{ $customer->address }}</td>
                  <td>{{ $customer->phone_number }}</td>
                  <td>
                    <a href="/customers/{{ $customer->id }}/edit" class="btn btn-warning"><i class="mdi mdi-pencil"></i>
                      Edit</a>
                    <a href="/customers/{{ $customer->id }}" class="btn btn-danger" data-confirm-delete="true"><i
                        class="mdi mdi-delete"></i>
                      Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Action</th>
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