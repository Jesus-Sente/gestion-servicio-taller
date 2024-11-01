@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehiculos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th >Modelo</th>
                                    <th >Color</th>
                                    <th >Marca Vehiculos</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($vehiculos as $vehiculo)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td >{{ $vehiculo->modelo }}</td>
                                        <td >{{ $vehiculo->color }}</td>
                                        <td >{{ $vehiculo->marca->nombre }}</td>

                                        <td>
                                            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vehiculos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
