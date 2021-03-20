@extends('layouts.mainAdmin')

@section('content')
    <div class="single-product-tab-area mg-t-15 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="single-product-details res-pro-tb">
                        <h1>Producto a canjear: {{ $product->name }}</h1>
                        <h2>Cliente: {{ $point->user->name }}</h2>
                        {{-- <h4>Te queda un total de: {{ $client->total_points }}</h4> --}}
                        <hr>
                        <div class="single-pro-price">
                            <span class="single-regular">Puntos Canjeados: {{ $point->point }}</span>
                        </div>


                        <hr>
                        <div class="single-pro-cn">
                            @if ($point->exchange == 'No')
                                <a href="{{ route('point.ChangeQr', $point->id) }}" type="button"
                                    class="btn btn-custon-four btn-danger">Canjear Producto</a>
                            @else
                                <div class="alert alert-danger alert-mg-b" role="alert">
                                    <strong>Beneficio Canjeado!</strong> Este QR ya fue utilizado el día
                                    {{ \Carbon\Carbon::parse($point->date_exchange)->format('d/m/Y') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
