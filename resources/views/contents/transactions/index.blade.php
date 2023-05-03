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
          <a href="/transactions/create" class="btn btn-primary"><i class="mdi mdi-library-plus"></i> Add Data</a>
          <div class="table-responsive mt-3">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Supplier Name</th>
                  <th>Customer Name</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price Total</th>
                  <th>Transaction Status</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($transactions as $transaction)
                <tr>
                  <td>{{ $loop->iteration }}</td>

                  @if ($transaction->supplier_id == null)
                  <td>-</td>
                  @else
                  <td>{{ $transaction->supplier->name }}</td>
                  @endif

                  @if ($transaction->customer_id == null)
                  <td>-</td>
                  @else
                  <td>{{ $transaction->customer->name }}</td>
                  @endif

                  <td>{{ $transaction->item->name }}</td>
                  <td>{{ $transaction->quantity }}</td>
                  <td>{{ $transaction->price_total }}</td>

                  @if ($transaction->transaction_status == 0)
                  <td>
                    <span class="badge badge-danger">Failed</span>
                  </td>
                  @elseif ($transaction->transaction_status == 1)
                  <td>
                    <span class="badge badge-warning">Pending</span>
                  </td>
                  @elseif ($transaction->transaction_status == 2)
                  <td>
                    <span class="badge badge-success">Process</span>
                  </td>
                  @elseif ($transaction->transaction_status == 3)
                  <td>
                    <span class="badge badge-info">Success</span>
                  </td>
                  @endif

                  <td>{{ $transaction->updated_at }}</td>
                  <td>
                    <a href="/transactions/{{ $transaction->id }}/edit" class="btn btn-warning"><i
                        class="mdi mdi-pencil"></i>
                      Edit</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Supplier Name</th>
                  <th>Customer Name</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price Total</th>
                  <th>Transaction Status</th>
                  <th>Date</th>
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