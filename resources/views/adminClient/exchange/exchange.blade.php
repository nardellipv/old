@extends('layouts.mainAdmin')

@section('content')
<div class="single-product-tab-area mg-t-15 mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div id="myTabContent1" class="tab-content">
                    <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                        {!! $qr !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="single-product-details res-pro-tb">
                    <h1>Producto a canjear: {{ $product->name }}</h1>
                    <h4>Te queda un total de: {{ $client->total_points }}</h4>
                    <hr>
                    <div class="single-pro-price">
                        <span class="single-regular">Puntos: {{ $product->point }}</span>
                    </div>
                    
                    <div class="color-quality-pro">                        
                        <div class="clear"></div>
                        <div class="single-pro-button">
                            <button type="button" class="btn btn-custon-rounded-three btn-primary">Enviar QR a tu email</button>
                            <a href="{{ route('point.exchengeClient', $product) }}" type="button" class="btn btn-custon-rounded-three btn-warning">Canjear Producto</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <hr>
                    <div class="single-pro-cn">
                        <h3>Canjea tu Producto/Servicio</h3>
                        <p>Puedes enviar el QR a tu email para que el barbero, escanee el producto/servicio cuando estes en <b>Old Barber Chair</b>. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection