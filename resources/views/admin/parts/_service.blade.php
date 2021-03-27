<div class="basic-form-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline10-list mt-b-30">
                    <div class="sparkline10-hd">
                        <div class="main-sparkline10-hd">
                            <h1>Ingresar Servicio</h1>
                        </div>
                    </div>
                    <div class="sparkline10-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="basic-login-inner inline-basic-form">
                                        <div class="sparkline8-graph">
                                            <div class="static-table-list">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Producto</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $product)
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ route('product.sell', $product) }}">
                                                                        <i class="fa fa-check fa-2x"
                                                                            style="color:blue"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    {{ $product->name }}
                                                                </td>
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline11-list responsive-mg-b-30">
                    <div class="sparkline11-hd">
                        <div class="main-sparkline11-hd">
                            <h1>Código Canje</h1>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <form action="{{ route('point.exchengeShowCode') }}" method="POST">
                            @csrf
                            <label>Ingresar código</label>
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <input type="number" name="code" class="form-control"
                                        placeholder="Ingresar Código" />
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Canjear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
