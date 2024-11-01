<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $vehiculo?->modelo) }}" id="modelo" placeholder="Modelo">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="color" class="form-label">{{ __('Color') }}</label>
            <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" value="{{ old('color', $vehiculo?->color) }}" id="color" placeholder="Color">
            {!! $errors->first('color', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="marca_vehiculos_id" class="form-label">{{ __('Marca Vehiculos') }}</label>
            <select name="marca_vehiculos_id" class="form-control @error('marca_vehiculos_id') is-invalid @enderror" id="marca_vehiculos_id">
                <option value="">{{ __('Seleccione una marca') }}</option>
                @foreach (\App\Models\MarcaVehiculo::all() as $marca)
                    <option value="{{ $marca->id }}" {{ old('marca_vehiculos_id') == $marca->id ? 'selected' : '' }}>
                        {{ $marca->nombre }} <!-- Asegúrate de que 'nombre' es el campo correcto -->
                    </option>
                @endforeach
            </select>
            {!! $errors->first('marca_vehiculos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
