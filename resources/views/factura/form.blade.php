<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreNegocio') }}
            {{ Form::text('nombreNegocio', $factura->nombreNegocio, ['class' => 'form-control' . ($errors->has('nombreNegocio') ? ' is-invalid' : ''), 'placeholder' => 'Nombrenegocio']) }}
            {!! $errors->first('nombreNegocio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nitNegocio') }}
            {{ Form::text('nitNegocio', $factura->nitNegocio, ['class' => 'form-control' . ($errors->has('nitNegocio') ? ' is-invalid' : ''), 'placeholder' => 'Nitnegocio']) }}
            {!! $errors->first('nitNegocio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccionNegocio') }}
            {{ Form::text('direccionNegocio', $factura->direccionNegocio, ['class' => 'form-control' . ($errors->has('direccionNegocio') ? ' is-invalid' : ''), 'placeholder' => 'Direccionnegocio']) }}
            {!! $errors->first('direccionNegocio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nitCliente') }}
            {{ Form::text('nitCliente', $factura->nitCliente, ['class' => 'form-control' . ($errors->has('nitCliente') ? ' is-invalid' : ''), 'placeholder' => 'Nitcliente']) }}
            {!! $errors->first('nitCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreCliente') }}
            {{ Form::text('nombreCliente', $factura->nombreCliente, ['class' => 'form-control' . ($errors->has('nombreCliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecliente']) }}
            {!! $errors->first('nombreCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaEmision') }}
            {{ Form::text('fechaEmision', $factura->fechaEmision, ['class' => 'form-control' . ($errors->has('fechaEmision') ? ' is-invalid' : ''), 'placeholder' => 'Fechaemision']) }}
            {!! $errors->first('fechaEmision', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>