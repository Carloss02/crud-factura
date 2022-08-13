@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? 'Show Factura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrenegocio:</strong>
                            {{ $factura->nombreNegocio }}
                        </div>
                        <div class="form-group">
                            <strong>Nitnegocio:</strong>
                            {{ $factura->nitNegocio }}
                        </div>
                        <div class="form-group">
                            <strong>Direccionnegocio:</strong>
                            {{ $factura->direccionNegocio }}
                        </div>
                        <div class="form-group">
                            <strong>Nitcliente:</strong>
                            {{ $factura->nitCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrecliente:</strong>
                            {{ $factura->nombreCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaemision:</strong>
                            {{ $factura->fechaEmision }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
