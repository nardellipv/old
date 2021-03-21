        <div class="widgets-programs-area mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Nuevo Cliente</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <form method="post" action="{{ route('client.sendRegisterMail') }}">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Número Teléfono">
                                            <span class="input-group-addon danger"><button type="submit"
                                                    class="fa fa-paper-plane"></button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
