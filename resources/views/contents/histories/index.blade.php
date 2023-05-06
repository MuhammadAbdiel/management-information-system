@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Histories</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Histories</li>
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
          <h5 class="card-title mb-3">Transaction Histories</h5>
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered history-datatable">
              <thead>
                <tr>
                  <th>Condition</th>
                  <th>Amount</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <th>Condition</th>
                  <th>Amount</th>
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

@section('script')
<script>
  $(function () {

    var table = $('.history-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ordering: true,
        ajax: {
          url: "{{ url()->current() }}"
        },
        columns: [
          {
            data: 'condition', 
            name: 'condition',
            orderable: true,
            searchable: true
          },
          {data: 'amount', name: 'amount'},
          {
            data: 'updated_at',
            name: 'updated_at',
            orderable: true,
            searchable: true
          },
        ]
    });

  });
</script>
@endsection