@extends('layouts.mainAdmin')

@section('content')
    <div class="single-product-tab-area mg-tb-15">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            @include('admin.alerts.error')
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        Editar Producto</a></li>
                            </ul>
                            <form method="post" action="{{ route('product.store') }}">
                                @csrf
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group-inner">
                                                    <label>Nombre</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nombre"
                                                        value="{{ old('name') }}" required />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Precio</label>
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Precio" value="{{ old('price') }}" required />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Oferta</label>
                                                    <input type="number" name="offer" value="{{ old('offer') }}" class="form-control"
                                                        placeholder="Oferta" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group-inner">
                                                    <label>Puntos</label>
                                                    <input type="text" name="point" class="form-control"
                                                        placeholder="Puntos" value="{{ old('point') }}" required />
                                                </div>

                                                <div class="form-group-inner">
                                                    <label>Puntos para canjear</label>
                                                    <input type="text" name="point_changed" class="form-control"
                                                        placeholder="Puntos para canjear" value="{{ old('point_changed') }}" required />
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
