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
                                    Modificar Perfil</a></li>
                        </ul>
                        <form method="post" action="{{ route('client.updateProfile', $client) }}">
                            @csrf
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group-inner">
                                                        <label>Nombre</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Nombre" value="{{ $client->name }}" required />
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>Apellido</label>
                                                        <input type="text" name="lastname" class="form-control"
                                                            placeholder="Apellido" value="{{ $client->lastname }}"
                                                            required />
                                                    </div>
                                                <div class="form-group-inner">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email" value="{{ $client->email }}" required />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Cumpleaños</label>
                                                    <input type="date" name="birthday" class="form-control"
                                                        placeholder="Cumpleaños" value="{{ $client->birthday }}"
                                                        required readonly />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group-inner">
                                                    <label>Teléfono</label>
                                                    <input type="text" name="phone" class="form-control"
                                                        placeholder="Teléfono" value="{{ $client->phone }}"
                                                        required readonly />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Total Puntos</label>
                                                    <input type="text" name="total_points" class="form-control"
                                                        placeholder="Teléfono" value="{{ $client->total_points }}"
                                                        readonly />
                                                </div>

                                                <div class="form-group-inner">
                                                    <label>Cambiar Contraseña</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="*******" />
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light m-r-10">Actualizar
                                                </button>
                                                <a href="{{ route('clientDashboard') }}" type="button"
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