<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Productos Por Canjear <small>Mostrale el código al barbero</small></h4>
                    <table>
                        <tr>
                            <th>Producto</th>
                            <th>Puntos</th>
                            <th>Codigo</th>
                        </tr>
                        @forelse ($product_exchanges as $product_exchange)
                            <tr>
                                <td>{{ $product_exchange->product->name }}</td>
                                <td>{{ $product_exchange->point }}</td>
                                <td>{{ $product_exchange->code }}</td>
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
