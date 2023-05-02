@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Item Types</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Item Types</li>
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
          <h5 class="card-title mb-3">Item Type Data</h5>
          <a href="/item-types/create" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <div class="table-responsive mt-3">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($itemTypes as $itemType)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $itemType->name }}</td>
                  <td>
                    <a href="/item-types/{{ $itemType->id }}/edit" class="btn btn-warning"><i
                        class="mdi mdi-pencil"></i>
                      Edit</a>
                    <a href="/item-types/{{ $itemType->id }}" class="btn btn-danger" data-confirm-delete="true"><i
                        class="mdi mdi-delete"></i>
                      Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
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