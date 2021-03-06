        <div class="widgets-programs-area mg-t-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Nuevo Cliente</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="m-t-xl">
                                    <div class="input-group">
                                        <input type="text" id="text" />
                                        <button class="fa fa-whatsapp" type="button" id="btn" value="Submit"
                                            onClick="javascript: window.open('https://api.whatsapp.com/send?phone=549' + document.getElementById('text').value + '&text=Hola, para darte de alta solo debes ingresar a https://oldbarberchair.com.ar/register');" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
