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
                                                <h1>Ventas acumuladas ($ {{ $total_month }})</h1>
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
                                                            <th>Fecha</th>
                                                            <th>Precio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($sales as $sale)
                                                            <tr>
                                                                @if (empty($sale->user->name))
                                                                    <td><span class="text-danger">Sin Cliente</span></td>
                                                                @else
                                                                    <td>{{ $sale->user->name }} {{ $sale->user->lastname }}</td>
                                                                @endif
                                                                <td>{{ $sale->product->name }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($sale->created_at)->format('d/m/Y') }}
                                                                </td>
                                                                <td>$ {{ $sale->price }}</td>
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
