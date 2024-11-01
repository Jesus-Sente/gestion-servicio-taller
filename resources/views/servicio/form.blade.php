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
            <label for="tipo_servicios_id" class="form-label">{{ __('Tipo Servicios Id') }}</label>
            <input type="text" name="tipo_servicios_id" class="form-control @error('tipo_servicios_id') is-invalid @enderror" value="{{ old('tipo_servicios_id', $servicio?->tipo_servicios_id) }}" id="tipo_servicios_id" placeholder="Tipo Servicios Id">
            {!! $errors->first('tipo_servicios_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vehiculos_id" class="form-label">{{ __('Vehiculos Id') }}</label>
            <input type="text" name="vehiculos_id" class="form-control @error('vehiculos_id') is-invalid @enderror" value="{{ old('vehiculos_id', $servicio?->vehiculos_id) }}" id="vehiculos_id" placeholder="Vehiculos Id">
            {!! $errors->first('vehiculos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="clientes_id" class="form-label">{{ __('Clientes Id') }}</label>
            <input type="text" name="clientes_id" class="form-control @error('clientes_id') is-invalid @enderror" value="{{ old('clientes_id', $servicio?->clientes_id) }}" id="clientes_id" placeholder="Clientes Id">
            {!! $errors->first('clientes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>