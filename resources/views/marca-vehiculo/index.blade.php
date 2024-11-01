@extends('layouts.app')

@section('template_title')
    Marca Vehiculos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Marca Vehiculos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('marca-vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marcaVehiculos as $marcaVehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $marcaVehiculo->nombre }}</td>

                                            <td>
                                                <form action="{{ route('marca-vehiculos.destroy', $marcaVehiculo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('marca-vehiculos.show', $marcaVehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('marca-vehiculos.edit', $marcaVehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $marcaVehiculos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
