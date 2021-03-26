@extends('layouts.mainAdmin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/duallistbox/bootstrap-duallistbox.min.css') }}">
@endsection


@section('content')
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <div class="add-product">
                            <a href="{{ route('client.show', $client) }}">Editar Cliente</a>
                        </div>
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Servicio Cliente</a></li>
                            <li><a href="#exchange"><i class="fa fa-qrcode" aria-hidden="true"></i> Canjear Puntos <small
                                        class="text-muted f-w-400">{{ $client->total_points }}</small></a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form method="post" action="{{ route('client.updateService', $client) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group-inner">
                                                    <label>Nombre</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nombre"
                                                        value="{{ $client->name }}" required readonly />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Apellido</label>
                                                    <input type="text" name="lastname" class="form-control"
                                                        placeholder="Apellido" value="{{ $client->lastname }}" required
                                                        readonly />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email" value="{{ $client->email }}" required
                                                        readonly />
                                                </div>
                                                <div class="form-group-inner">
                                                    <label>Cumpleaños</label>
                                                    <input type="date" name="birthday" class="form-control"
                                                        placeholder="Cumpleaños" value="{{ $client->birthday }}" required
                                                        readonly />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="sparkline10-graph">
                                                <div class="basic-login-form-ad">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="dual-list-box-inner">
                                                                <select class="form-control dual_select" name="service[]"
                                                                    multiple required>
                                                                    @foreach ($products as $product)
                                                                        @if ($client->total_points >= $product->point_changed)
                                                                            <option value="{{ $product->id }}">
                                                                                {{ $product->name }}
                                                                            </option>                                                                            
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                <a href="{{ route('dashboard') }}" type="button"
                                                    class="btn btn-warning waves-effect waves-light">Volver
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="exchange">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h1>Seleccionar los canjes</h1>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="static-table-list">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Producto</th>
                                                            <th>Puntos</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $product)
                                                            <tr>
                                                                <td>
                                                                    <div class="i-checks pull-left">
                                                                        @if ($client->total_points >= $product->point_changed)
                                                                            <a
                                                                                href="{{ route('client.exchenge', [$client, $product->point_changed]) }}">
                                                                                <i class="fa fa-check fa-2x"
                                                                                    style="color:blue"></i>
                                                                            </a>
                                                                        @else
                                                                            <i class="fa fa-times fa-2x"
                                                                                style="color: red"></i>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                                @if ($client->total_points < $product->point)
                                                                    <td><span
                                                                            class="text text-danger">{{ $product->name }}</span>
                                                                    </td>
                                                                    <td><span
                                                                            class="text text-danger">{{ $product->point_changed }}</span>
                                                                    </td>
                                                                @else
                                                                    <td>{{ $product->name }}</td>
                                                                    <td>{{ $product->point_changed }}</td>
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/js/duallistbox/jquery.bootstrap-duallistbox.js') }}"></script>
    <script src="{{ asset('assets/js/duallistbox/duallistbox.active.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck-active.js') }}"></script>
@endsection
