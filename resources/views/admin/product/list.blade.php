@extends('layouts.mainAdmin')

@section('content')
<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Lista de productos</h4>
                    <div class="add-product">
                        <a href="{{ route('product.add') }}">Argegar Producto</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Oferta</th>
                            <th>Puntos</th>
                            <th>Puntos a Canjear</th>
                            <th>Acción</th>
                            <th>Canje</th>
                        </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            @if ($product->offer)
                            <td>${{ $product->offer }}</td>
                            @else
                            <td><span class="text-danger font-bold">Sin Oferta</span></td>
                            @endif
                            <td>{{ $product->point }}</td>
                            <td>{{ $product->point_changed }}</td>
                            <td>
                                <a href="{{ route('product.show', $product) }}" data-toggle="tooltip" title="Editar"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{ route('product.delete', $product) }}" data-toggle="tooltip" title="Eliminar"
                                    class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                                @if($product->exchange == 'Y')
                                <a href="{{ route('productDesactive.exchange', $product) }}">
                                    <i class="fa fa-check fa-2x"
                                        style="color:blue"></i>
                                </a>
                                @else
                                <a href="{{ route('productActive.exchange', $product) }}">
                                    <i class="fa fa-times fa-2x"
                                        style="color:red"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection