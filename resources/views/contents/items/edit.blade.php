@extends('layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Update Item</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/items">Items</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Item</li>
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
        <form action="/items/{{ $item->id }}" method="POST" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card-body">
            <h4 class="card-title mb-3">Update Item</h4>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Item Types</label>
              <div class="col-md-9">
                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                  name="item_type_id">
                  <option>Select Item Type</option>

                  @foreach ($itemTypes as $itemType)
                  @if (old('item_type_id', $item->item_type_id) == $itemType->id)
                  <option value="{{ $itemType->id }}" selected>{{ $itemType->name }}</option>
                  @else
                  <option value="{{ $itemType->id }}">{{ $itemType->name }}</option>
                  @endif
                  @endforeach

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 m-t-15">Item Units</label>
              <div class="col-md-9">
                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                  name="item_unit_id">
                  <option>Select Item Unit</option>

                  @foreach ($itemUnits as $itemUnit)
                  @if (old('item_unit_id', $item->item_unit_id) == $itemUnit->id)
                  <option value="{{ $itemUnit->id }}" selected>{{ $itemUnit->name }}</option>
                  @else
                  <option value="{{ $itemUnit->id }}">{{ $itemUnit->name }}</option>
                  @endif
                  @endforeach

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-sm-3 text-left control-label col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                  placeholder="Name Here" value="{{ old('name', $item->name) }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="quantity" class="col-sm-3 text-left control-label col-form-label">Quantity</label>
              <div class="col-sm-9">
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                  name="quantity" placeholder="Quantity Here" value="{{ old('quantity', $item->quantity) }}">
                @error('quantity')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-3 text-left control-label col-form-label">Price</label>
              <div class="col-sm-9">
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                  placeholder="Price Here" value="{{ old('price', $item->price) }}">
                @error('price')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="border-top">
            <div class="card-body">
              <a href="/items" class="btn btn-danger">Back</a>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection