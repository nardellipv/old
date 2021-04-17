@extends('layouts.mainAdmin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-editable.css') }}">
@endsection

@section('content')
    <div class="adminpro-accordion-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-area mg-tb-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="sparkline13-list">
                                        <div class="sparkline13-hd">
                                            <div class="main-sparkline13-hd">
                                                <h1>Canjes acumuladas</h1>
                                            </div>
                                        </div>
                                        <div class="sparkline13-graph">
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <table id="table" data-toggle="table" data-pagination="true"
                                                    data-search="true" data-show-export="true">
                                                    <thead>
                                                        <tr>
                                                            <th>Cliente</th>
                                                            <th>Producto</th>
                                                            <th>Canjeado?</th>
                                                            <th>Fecha</th>
                                                            <th>Puntos</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($exchanges as $exchange)
                                                            <tr>
                                                                <td>{{ $exchange->user->name }} {{ $exchange->user->lastname }}</td>
                                                                <td>{{ $exchange->product->name }}</td>
                                                                <td>{{ $exchange->exchange }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($exchange->created_at)->format('d/m/Y') }}
                                                                </td>
                                                                <td>{{ $exchange->point }}</td>
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
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-export.js') }}"></script>
@endsection
