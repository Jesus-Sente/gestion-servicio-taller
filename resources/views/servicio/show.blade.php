@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? __('Show') . " " . __('Servicio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $servicio->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Costo:</strong>
                                    {{ $servicio->costo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Servicios Id:</strong>
                                    {{ $servicio->tipo_servicios_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Vehiculo Id:</strong>
                                    {{ $servicio->vehiculo_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Clientes Id:</strong>
                                    {{ $servicio->clientes_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
