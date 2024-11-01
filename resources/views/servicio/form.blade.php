<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $servicio?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="costo" class="form-control @error('costo') is-invalid @enderror" value="{{ old('costo', $servicio?->costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_servicios_id" class="form-label">{{ __('Tipo Servicios') }}</label>
            <select name="tipo_servicios_id" class="form-control @error('tipo_servicios_id') is-invalid @enderror" id="tipo_servicios_id">
                <option value="">{{ __('Seleccione un tipo de servicio') }}</option>
                @foreach (\App\Models\TipoServicio::all() as $tipo)
                    <option value="{{ $tipo->id }}" {{ old('tipo_servicios_id') == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }} <!-- Asegúrate de que 'nombre' es el campo correcto -->
                    </option>
                @endforeach
            </select>
            {!! $errors->first('tipo_servicios_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="vehiculos_id" class="form-label">{{ __('Vehiculos') }}</label>
            <select name="vehiculos_id" class="form-control @error('vehiculos_id') is-invalid @enderror" id="vehiculos_id">
                <option value="">{{ __('Seleccione un vehículo') }}</option>
                @foreach (\App\Models\Vehiculo::all() as $vehiculo)
                    <option value="{{ $vehiculo->id }}" {{ old('vehiculos_id') == $vehiculo->id ? 'selected' : '' }}>
                        {{ $vehiculo->modelo }} <!-- Asumiendo que 'marca_vehiculos_id' es el campo que deseas mostrar -->
                    </option>
                @endforeach
            </select>
            {!! $errors->first('vehiculos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="clientes_id" class="form-label">{{ __('Clientes') }}</label>
            <select name="clientes_id" class="form-control @error('clientes_id') is-invalid @enderror" id="clientes_id">
                <option value="">{{ __('Seleccione un cliente') }}</option>
                @foreach (\App\Models\Cliente::all() as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('clientes_id') == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nombre }} <!-- Asumiendo que 'nombre' es el campo que deseas mostrar -->
                    </option>
                @endforeach
            </select>
            {!! $errors->first('clientes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
