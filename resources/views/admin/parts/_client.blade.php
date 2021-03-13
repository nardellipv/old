@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
@endsection

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
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                    <tr>
                                        <th data-field="name">Nombre</th>
                                        <th data-field="lastname">Apellido</th>
                                        <th data-field="birthday">Cumpleaños</th>
                                        <th data-field="phone">Teléfono</th>
                                        <th data-field="point">Puntos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <a href="{{ route('client.addService', $user) }}">
                                                    {{ $user->name }}
                                                </a>
                                            </td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->total_points }}</td>
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


@section('js')
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
@endsection
