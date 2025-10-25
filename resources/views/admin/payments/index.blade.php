@extends('adminlte::page')

@section('title', 'JDeveloper')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap4.css">
@stop
@section('content_header')
    <h1>Lista de usuarios</h1>
@stop
@section('content')
<div class="container my-5">
  <div class="card mx-auto p-4 rounded-3 shadow" style="max-width: 800px;">
    <div class="row g-4 align-items-center">
      
      <!-- Imagen -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/laptop.png') }}" 
             alt="White T-Shirt" 
             class="img-fluid rounded">
      </div>

      <!-- Detalles del producto -->
      <div class="col-md-6">
        <h1 class="display-5 fw-bold">White T-Shirt</h1>
        <hr class="my-3">
        <span class="d-block mb-3">Price: <b>$20</b></span>
        <p class="mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic reiciendis sapiente eveniet laudantium voluptate aspernatur.
        </p>
        <form action="{{route('admin.payment')}}" method="POST">@csrf
          <input type="hidden" name="amount" value="20">
          <button type="submit" class="btn btn-dark w-100">
            Pay with PayPal
          </button>
        </form>
      </div>

    </div>
  </div>
</div>

@stop 
@section('js') 
@stop
