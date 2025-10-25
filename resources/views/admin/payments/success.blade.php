@extends('adminlte::page')

@section('title', 'Pago Exitoso')

@section('content')
<div class="container py-5 text-center">
    <div class="card shadow p-5">
        <h2 class="text-success mb-4">¡Pago exitoso!</h2>
        <p>Tu ID de transacción es:</p>
        <h4 class="fw-bold text-primary">{{ $payment_id }}</h4>
        <p class="mt-3">Monto: <strong>{{ $amount }} {{ $currency }}</strong></p>
        <a href="{{ url('/') }}" class="btn btn-dark mt-4">Volver al inicio</a>
    </div>
</div>
@endsection
