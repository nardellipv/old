<div class="static-table-area mg-t-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline8-list">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Ventas del Mes</h1>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="static-table-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sells as $sell)
                                    <tr>
                                        <td>{{ $sell->product->name }}</td>
                                        <td>{{ $sell->product_count }}</td>
                                        <td>${{ $sell->product->price }}</td>
                                        <td>${{ $sell->product->price * $sell->product_count }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline9-list mt-b-30">
                    <div class="sparkline9-hd">
                        <div class="main-sparkline9-hd">
                            <h1>Ventas Acumuladas</h1>
                        </div>
                    </div>
                    <div class="sparkline9-graph">
                        <div class="static-table-list">
                            <table class="table sparkle-table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sells_total as $sell_total)
                                    <tr>
                                        <td>{{ $sell_total->product->name }}</td>
                                        <td>{{ $sell_total->product_count }}</td>
                                        <td>${{ $sell_total->product->price }}</td>
                                        <td>${{ $sell_total->product->price * $sell_total->product_count }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $sells_total->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>