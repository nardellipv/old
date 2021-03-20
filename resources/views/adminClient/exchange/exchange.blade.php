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
                        <span class="single-regular">Puntos Canjeados: {{ $product->point }}</span>
                    </div>
                    
                    
                    <hr>
                    <div class="single-pro-cn">
                        <h3>Canjea tu Producto/Servicio</h3>
                        <p>Por favor cuando estes en la barbería, mostra este QR al barbero que te atienda y el canjera tus puntos. </p>
                        <p>Muchas gracias por confiar en <b>Old Barber Chair</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection