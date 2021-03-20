        <div class="widgets-programs-area mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Clientes Registrados</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-success">{{ $user_count }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Productos Totales</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-barcode" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-success"></h1>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Ingresos Mensuales</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-bank" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-success">${{ $month_sell }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Ingresos anual</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <h1 class="text-success">${{ $year_sell }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>