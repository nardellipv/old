@extends('layouts.mainAdmin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/chosen/bootstrap-chosen.css') }}">
@endsection

@section('content')
    <div class="single-product-tab-area mg-tb-15">
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            @include('admin.alerts.error')
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        Agregar Venta</a></li>
                            </ul>
                            <form method="post" action="{{ route('sale.store') }}">
                                @csrf
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="form-group-inner">
                                                        <label>Cliente <small>Opcional</small></label>
                                                        <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Cliente" name="user_id"
                                                                class="chosen-select" tabindex="-1">
                                                                <option value="">Sin Cliente</option>
                                                                <option disabled>-------------------</option>
                                                                @foreach ($clients as $client)
                                                                    <option value="{{ $client->id }}">
                                                                        {{ $client->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>Producto</label>
                                                        <select data-placeholder="Producto" name="product_id"
                                                                class="chosen-select" tabindex="-1">
                                                                <option value="">Elegir Producto</option>
                                                                <option disabled>-------------------</option>
                                                                @foreach ($products as $product)
                                                                    <option value="{{ $product->id }}">
                                                                        {{ $product->name }}</option>
                                                                @endforeach
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="form-group-inner">
                                                        <label>Fecha de la venta</label>
                                                        <input type="date" name="created_at" class="form-control"
                                                            placeholder="fecha" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light m-r-10">Agregar
                                                    </button>
                                                    <a href="{{ route('product.list') }}" type="button"
                                                        class="btn btn-warning waves-effect waves-light">Volver
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen/chosen-active.js') }}"></script>
@endsection
