@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Suppliers</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
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
          <h5 class="card-title mb-3">Supplier Data</h5>
          <a href="/suppliers/create" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered supplier-datatable">
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

                {{-- @foreach ($suppliers as $supplier)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $supplier->code }}</td>
                  <td>{{ $supplier->name }}</td>
                  <td>{{ $supplier->address }}</td>
                  <td>{{ $supplier->phone_number }}</td>
                  <td>
                    <a href="/suppliers/{{ $supplier->id }}/edit" class="btn btn-warning"><i class="mdi mdi-pencil"></i>
                      Edit</a>
                    <a href="/suppliers/{{ $supplier->id }}" class="btn btn-danger" data-confirm-delete="true"><i
                        class="mdi mdi-delete"></i>
                      Delete</a>
                  </td>
                </tr>
                @endforeach --}}

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

@section('script')
<script>
  $(function () {

    var table = $('.supplier-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ordering: true,
        ajax: {
          url: "{{ url()->current() }}"
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'code', name: 'code'},
            {data: 'name', name: 'name'},
            {data: 'address', name: 'address'},
            {data: 'phone_number', name: 'phone_number'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });

  });
</script>
@endsection