@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Create Transaction</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/transactions">Transactions</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Transaction</li>
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
        <form action="/transactions/{{ $transaction->id }}" method="POST" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card-body">
            <h4 class="card-title mb-3">Create Transaction</h4>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Supplier Name</label>
              <div class="col-md-9">
                <select disabled class="select2 form-control custom-select" style="width: 100%; height:36px;"
                  name="supplier_id">
                  <option value={{ null }}>Select Supplier Name</option>

                  @foreach ($suppliers as $supplier)
                  @if (old('supplier_id', $transaction->supplier_id) == $supplier->id)
                  <option value="{{ $supplier->id }}" selected>{{ $supplier->name }}</option>
                  @else
                  <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                  @endif
                  @endforeach

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Customer Name</label>
              <div class="col-md-9">
                <select disabled class="select2 form-control custom-select" style="width: 100%; height:36px;"
                  name="customer_id">
                  <option value={{ null }}>Select Customer Name</option>

                  @foreach ($customers as $customer)
                  @if (old('customer_id', $transaction->customer_id) == $customer->id)
                  <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
                  @else
                  <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                  @endif
                  @endforeach

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Item Name</label>
              <div class="col-md-9">
                <select disabled class="select2 form-control custom-select" style="width: 100%; height:36px;"
                  name="item_id">
                  <option>Select Item Name</option>

                  @foreach ($items as $item)
                  @if (old('item_id', $transaction->item_id) == $item->id)
                  <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                  @else
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endif
                  @endforeach

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="quantity" class="col-sm-3 text-left control-label col-form-label">Quantity</label>
              <div class="col-sm-9">
                <input readonly type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                  name="quantity" placeholder="Quantity Here" value="{{ old('quantity', $transaction->quantity) }}">
                @error('quantity')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Transaction Status</label>
              <div class="col-md-9">
                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                  name="transaction_status">
                  <option>Select Transaction Status</option>

                  @if (old('transaction_status', $transaction->transaction_status) == 0)
                  <option value={{ 0 }} selected>Failed</option>
                  <option value={{ 1 }}>Pending</option>
                  <option value={{ 2 }}>Process</option>
                  <option value={{ 3 }}>Success</option>
                  @elseif (old('transaction_status', $transaction->transaction_status) == 1)
                  <option value={{ 0 }}>Failed</option>
                  <option value={{ 1 }} selected>Pending</option>
                  <option value={{ 2 }}>Process</option>
                  <option value={{ 3 }}>Success</option>
                  @elseif (old('transaction_status', $transaction->transaction_status) == 2)
                  <option value={{ 0 }}>Failed</option>
                  <option value={{ 1 }}>Pending</option>
                  <option value={{ 2 }} selected>Process</option>
                  <option value={{ 3 }}>Success</option>
                  @elseif (old('transaction_status', $transaction->transaction_status) == 3)
                  <option value={{ 0 }}>Failed</option>
                  <option value={{ 1 }}>Pending</option>
                  <option value={{ 2 }}>Process</option>
                  <option value={{ 3 }} selected>Success</option>
                  @endif

                </select>
              </div>
            </div>
          </div>
          <div class="border-top">
            <div class="card-body">
              <a href="/transactions" class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection