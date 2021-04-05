@extends('layouts.mainAdmin')

@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Productos Canjeados</h4>
                        <table>
                            <tr>
                                <th>Producto</th>
                                <th>Puntos</th>
                                <th>Código</th>
                                <th>Canjeado</th>
                            </tr>
                            @forelse ($list_exchange as $list)
                                <tr>
                                    <td>{{ $list->product->name }}</td>
                                    <td>{{ $list->point }}</td>
                                    <td>{{ $list->code }}</td>
                                    <td>
                                        @if($list->exchange == 'Si')
                                            <p style="color: red">Canjeado el {{ \Carbon\Carbon::parse($list->date_exchange)->format('d/m/Y') }}</p>
                                        @else
                                            <p>Todavía no canjeado</p>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <td>
                                    <p>Todavía no tienes productos/servicios por canjear.</p>
                                </td>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
