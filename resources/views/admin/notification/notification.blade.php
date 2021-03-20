@extends('layouts.mainAdmin')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Lista de notificaciones</h4>
                        <table>
                            <tr>
                                <th>Notificación</th>
                                <th>Fecha Fin</th>
                                <th>Acción</th>
                            </tr>
                            @foreach ($notifications as $notification)
                                <tr>
                                    <td>{{ $notification->text }}</td>
                                    <td>{{ \Carbon\Carbon::parse($notification->date)->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('notification.delete', $notification) }}" data-toggle="tooltip"
                                            title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="basic-form-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Crear Notificación</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form action="{{ route('notification.create') }}" method="POST">
                                                @csrf
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Notificación</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" name="text" class="form-control" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Fecha Fin</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="date" name="date" class="form-control" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Crear
                                                    Notificación</button>
                                            </form>
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
