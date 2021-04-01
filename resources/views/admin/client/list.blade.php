@extends('layouts.mainAdmin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-editable.css') }}">
@endsection

@section('content')
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Listado Clientes</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="add-product">
                                    <a href="{{ route('client.add') }}">Argegar Cliente</a>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Email</th>
                                            <th>Cumpleaños</th>
                                            <th>Teléfono</th>
                                            <th>Puntos</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td><a
                                                        href="{{ route('client.show', $client) }}">{{ $client->name }}</a>
                                                </td>
                                                <td>{{ $client->lastname }}</td>
                                                <td>{{ $client->email }}</td>
                                                <td>{{ \Carbon\Carbon::parse($client->birthday)->format('d/m/Y') }}</td>
                                                <td>{{ $client->phone }}</td>
                                                <td>{{ $client->total_points }}</td>
                                                <td>
                                                    <a href="{{ route('client.show', $client) }}" data-toggle="tooltip"
                                                        title="Editar"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>
                                                    <a href="{{ route('client.delete', $client) }}" data-toggle="tooltip"
                                                        title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></a>
                                                    <a class="brd-rd3" href="https://api.whatsapp.com/send?phone=549{{ $client->phone }}&text=Hola%20{{ $client->name }},"
                                                        target="_blank">
                                                        <i class="fa fa-whatsapp"></i>
                                                    </a>
                                                </td>
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
@endsection

@section('js')
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
@endsection
