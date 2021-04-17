@extends('layouts.mainAdmin')

@section('content')
    <div class="adminpro-accordion-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <div class="admin-pro-accordion-wrap responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Listado Mensual de Canjes</h2>
                            </div>                            
                            @foreach ($exchanges as $key => $exchange)
                                <div class="panel-group adminpro-custon-design" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading accordion-head">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapse{{ $key }}">
                                                    Mes: {{ $exchange->month }} - Año:{{ $exchange->year }}</a>
                                            </h4>
                                        </div>
                                        <div id="collapse{{ $key }}"
                                            class="panel-collapse panel-ic collapse {{ $key == '0' ? 'in' : '' }}">
                                            <div class="panel-body admin-panel-content animated bounce">
                                                <div class="sparkline8-graph">
                                                    <div class="static-table-list">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Cantidad Canjes</th>
                                                                    <th>Total Puntos</th>
                                                                    <th>Acción</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $exchange->data }}</td>
                                                                    <td>{{ $exchange->point }}</td>
                                                                    <td>
                                                                        <a href="{{ route('exchange.detail', [$exchange->month, $exchange->year]) }}"
                                                                            class="btn btn-sm btn-primary"
                                                                            type="button" style="color: white">Ver Detalle</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $exchanges->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
