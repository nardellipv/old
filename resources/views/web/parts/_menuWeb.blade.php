<div class="banner">
    <div class="banner-dott">
        <!-- Top-Bar -->
        <div class="top-bar w3-1">
            <div class="container">
                <div class="header-nav w3-agileits-1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" style="margin-left: 40%;">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" style="width: 30%"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav ">
                                <li><a class=" active" href="{{ route('home') }}">Home</a></li>
                                {{-- <li><a href="#about" class="scroll">About</a></li> --}}
                                <li><a href="#styles" class="scroll">Estilo</a></li>
                                <li><a href="#price" class="scroll">Precios</a></li>
                                <li><a href="#gallery" class="scroll">Galería</a></li>
                                {{-- <li><a href="#testimonials" class="scroll">Testimonials</a></li> --}}
                                <li><a href="#contact" class="scroll">Contacto</a></li>
                                <li><a href="{{ url('/login') }}">Ingresar</a></li>
                            </ul>
                        </div><!-- /navbar-collapse -->

                        <div class="clearfix"></div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- //Top-Bar -->

        <!-- w3-banner -->
        <div class="w3-banner">
            <div id="typer"></div>
            <p>Lo invitamos a que venga y experimente nuestra atmósfera única, donde la amabilidad y el servicio de alta
                calidad de los salones pasados ​​se combinan con la comodidad del mundo actual.

                ¡Vení entonces! Precios competitivos, servicio amable y excelentes resultados, estará feliz de venir.
                Queremos ser tu peluquero y redoblaremos nuestros esfuerzos para mostrarte nuestro agradecimiento.</p>
        </div>

        <div class="w3ls-phone">
            <h2>Llamanos al :<i class="fa fa-phone" aria-hidden="true"></i> (261)665-9497</h2>
        </div>
        <!-- //w3-banner -->
    </div>
</div>
