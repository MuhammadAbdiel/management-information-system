@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Create Customer</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/customers">Customers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Customer</li>
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
        <form action="/customers" method="POST" class="form-horizontal">
          @csrf
          <div class="card-body">
            <h4 class="card-title mb-3">Create Customer</h4>
            <div class="form-group row">
              <label for="code" class="col-sm-3 text-left control-label col-form-label">Customer Code</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code"
                  placeholder="Customer Code Here" value="{{ old('code') }}">
                @error('code')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-sm-3 text-left control-label col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                  placeholder="Name Here" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-sm-3 text-left control-label col-form-label">Address</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                  name="address" placeholder="Address Here" value="{{ old('address') }}">
                @error('address')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="phone_number" class="col-sm-3 text-left control-label col-form-label">Phone Number</label>
              <div class="col-sm-9">
                <input type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                  name="phone_number" placeholder="Phone Number Here" value="{{ old('phone_number') }}">
                @error('phone_number')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="border-top">
            <div class="card-body">
              <a href="/customers" class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection