<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Listado de canjes <small>Total de puntos en tu cuenta: {{ $user->total_points }}</small></h4>
                    <table>
                        <tr>
                            <th>Producto</th>
                            <th>Puntos</th>
                            <th>Canjear</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->point_changed }}</td>
                                <td>
                                    @if ($user->total_points >= $product->point_changed)
                                        <a href="{{ route('point.exchengeClient', $product) }}" type="button"
                                            class="btn btn-custon-four btn-primary btn-xs">Canjear</a>
                                    @else
                                        <button type="button" class="btn btn-custon-four btn-danger btn-xs"
                                            disabled>Canjear</button>
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
