@extends('layouts.main')

@section('style')
<style>
  .amount {
    font-size: 100px;
  }

  @media (max-width: 1400px) {
    .amount {
      font-size: 90px;
    }
  }

  @media (max-width: 1200px) {
    .amount {
      font-size: 70px;
    }
  }

  @media (max-width: 992px) {
    .amount {
      font-size: 50px;
    }
  }

  @media (max-width: 768px) {
    .amount {
      font-size: 50px;
    }
  }

  @media (max-width: 576px) {
    .amount {
      font-size: 40px;
    }
  }
</style>
@endsection

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Funds</h4>
      <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Funds</li>
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
          <div class="alert alert-success m-0 text-center" role="alert">
            <h4 class="card-title mb-3">Balance</h4>
            <h1 class="amount"></h1>
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

    $.get('/amount', (response) => {
      $('.amount').html(`Rp. ${new Intl.NumberFormat().format(response.data.amount)}`)
    })

  });
</script>
@endsection