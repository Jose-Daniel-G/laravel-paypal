@extends('adminlte::page')

@section('title', 'Dashboard')
{{-- @section('plugins.Sweetalert2', true) --}}
@section('css')

@stop
@section('content_header')
    <h1>Sistema de reservas </h1>
@stop

@section('content')
 
    <div class="row">
        {{-- CONFIGURACION --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3></h3>
                    <p>Configuracion</p>
                </div>
                <div class="icon">
                    <i class="bi bi-gear"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- PROGRAMADOR --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3></h3>
                    <p>Programador</p>
                </div>
                <div class="icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- CLIENTES --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3></h3>
                    <p>Clientes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users mr-2"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <ibclass="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- CURSOS --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3></h3>
                    <p>Cursos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- PROFESORES --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3></h3>

                    <p>Profesores</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-person-lines-fill"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- HORARIOS --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3></h3>

                    <p>{{ __('actions.schedules') }}</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-calendar2-week"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- RESERVAS --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3></h3>

                    <p>Reservas</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-calendar2-week"></i>
                </div>
                <a href="" class="small-box-footer"> <i class="fas fa-calendar-alt"></i></a>
            </div>
        </div>

        {{-- VEHICULOS --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3></h3>

                    <p>Vehiculos</p>
                </div>
                <div class="icon">
                    <i class="bi bi-car-front"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- COMPLETADOS --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3></h3>

                    <p>Cursos completados</p>
                </div>
                <div class="icon">
                    <i class="bi bi-check-circle"></i>
                </div>
                <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    
@stop
