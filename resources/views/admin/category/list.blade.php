@extends('layouts.mainAdmin')
{{-- @section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/duallistbox/bootstrap-duallistbox.min.css') }}">
@endsection --}}

@section('content')
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="sparkline8-list">
                        <div class="sparkline8-hd">
                            @include('admin.alerts.error')
                            <div class="main-sparkline8-hd">
                                <h1>Listado Categorías</h1>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="static-table-list">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre Categoría</th>
                                            <th>Putos</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <form method="post" action="{{ route('category.update', $category) }}">
                                                @csrf
                                                <tr>
                                                    <td>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Nombre" value="{{ $category->name }}" />
                                                    </td>
                                                    <td>
                                                        <input type="text" name="point" class="form-control"
                                                            placeholder="Nombre" value="{{ $category->point }}" />
                                                    </td>
                                                    <td>
                                                        <button type="submit"
                                                        class="btn btn-custon-two btn-primary btn-xs"><span class="adminpro-icon adminpro-checked-pro"></span>Modificar
                                                        </button>
                                                        <a href="{{ route('category.delete', $category) }}" type="submit"
                                                            class="btn btn-custon-two btn-danger btn-xs"><span class="adminpro-icon adminpro-checked-pro"></span>Eliminar
                                                        </a>
                                                    </td>
                                                </tr>
                                            </form>
                                        @endforeach
                                        <form method="post" action="{{ route('category.add') }}">
                                            @csrf
                                            <tr>
                                                <td>
                                                    <input type="text" name="name" class="form-control" placeholder="Nombre"
                                                        value="" />
                                                </td>
                                                <td>
                                                    <input type="text" name="point" class="form-control"
                                                        placeholder="Puntos" value="" />
                                                </td>
                                                <td>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light m-r-10">Agregar
                                                    </button>
                                                </td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
