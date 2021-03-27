@extends('layouts.mainAdmin')

@section('content')
    <div class="single-product-tab-area mg-t-15 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="single-product-details res-pro-tb">
                        <h1>Producto a canjear: {{ $code->product->name }}</h1>
                        <h1>Código: {{ $code->code }}</h1>
                        <h2>Cliente: {{ $code->user->name }}</h2>
                        <h4>Le queda un total de: {{ $code->user->total_points }}</h4>
                        <hr>
                        <div class="single-pro-price">
                            <span class="single-regular">Puntos Canjeados: {{ $code->point }}</span>
                        </div>


                        <hr>
                        <div class="single-pro-cn">
                            @if ($code->exchange == 'No')
                            <form action="{{ route('point.exchengeCode', $code->code) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="btn btn-custon-four btn-danger">Canjear Producto</button>
                            </form>
                            @else
                                <div class="alert alert-danger alert-mg-b" role="alert">
                                    <strong>Beneficio Canjeado!</strong> Este Código ya fue utilizado el día
                                    {{ \Carbon\Carbon::parse($code->date_exchange)->format('d/m/Y') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
