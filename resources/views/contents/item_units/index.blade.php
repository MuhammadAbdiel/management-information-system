@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Item Units</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Item Units</li>
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
          <h5 class="card-title mb-3">Item Unit Data</h5>
          <a href="/item-units/create" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <div class="table-responsive mt-3">
            <table id="zero_config" class="table table-striped table-bordered item-unit-datatable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($itemUnits as $itemUnit)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $itemUnit->name }}</td>
                  <td>
                    <a href="/item-units/{{ $itemUnit->id }}/edit" class="btn btn-warning"><i
                        class="mdi mdi-pencil"></i>
                      Edit</a>
                    <a href="/item-units/{{ $itemUnit->id }}" class="btn btn-danger" data-confirm-delete="true"><i
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

{{-- @section('script')
<script>
  $(function () {

    var table = $('.item-unit-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('item-units.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
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
@endsection --}}

{{-- @section('script')
<script>
  const deleteButton = document.querySelectorAll('.delete');
    deleteButton.forEach((dBtn) => {
        dBtn.addEventListener('click', function (event) {
            event.preventDefault();

            const itemUnitId = this.dataset.id;
            const itemUnitName = this.dataset.name;
            Swal.fire({
                title: 'Are you sure to delete this data?',
                text: "You will delete data with name: " + itemUnitName,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const dataId = document.getElementById('data-' + itemUnitId);
                            dataId.submit();
                            
                            Swal.fire(
                                'Deleted!',
                                'Your data has been deleted.',
                                'success'
                            )
                        }
            })
        })
    });
</script>
@endsection --}}