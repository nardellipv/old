<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Listado de canjes</h4>
                    <table>
                        <tr>
                            <th>Producto</th>
                            <th>Puntos</th>
                            <th>Canjear</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->point }}</td>
                                <td>
                                    @if ($user->total_points >= $product->point)
                                        <a href="{{ route('point.showExchengeClient', $product) }}" data-toggle="tooltip"
                                            title="Canjear" class="pd-setting-ed"><i class="fa fa-check-square-o"
                                                aria-hidden="true"></i></a>
                                    @else
                                        <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
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
