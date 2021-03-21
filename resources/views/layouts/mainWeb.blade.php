    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Old Barber Chair</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Barbería clásica especializada en degrades y barbas" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">


        <!-- For Testimonials slider -->
        <link rel="stylesheet" href="{{ asset('assetsWeb/css/flexslider.css') }}" type="text/css" media="all" />
        <!-- //For Testimonials slider -->

        <!-- gallery css file-->
        <link rel="stylesheet" href="{{ asset('assetsWeb/css/lightGallery.css') }}" type="text/css" media="all" />
        <!-- //gallery css file-->

        <!-- //custom-theme files-->
        <link href="{{ asset('assetsWeb/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('assetsWeb/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- //custom-theme files-->

        <!-- font-awesome-icons -->
        <link href="{{ asset('assetsWeb/css/font-awesome.css') }}" rel="stylesheet">
        <!-- //font-awesome-icons -->

        <!-- googlefonts -->
        <link
            href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <link
            href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
            rel="stylesheet">
        <!-- //googlefonts -->

    </head>

    <body>
        @yield('content')

        <!-- js -->
        <script type="text/javascript" src="{{ asset('assetsWeb/js/jquery-2.1.4.min.js') }}"></script>
        <!-- for bootstrap working -->
        <script src="{{ asset('assetsWeb/js/bootstrap.js') }}"></script>
        <!-- //for bootstrap working -->
        <!-- //js -->

        <!-- For Gallery js files -->
        <script src="{{ asset('assetsWeb/js/lightGallery.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("#lightGallery").lightGallery({
                    mode: "fade",
                    speed: 800,
                    caption: true,
                    desc: true,
                    mobileSrc: true
                });
            });

        </script>
        <!-- //For Gallery js files -->

        <!-- //here starts scrolling icon -->
        <script src="{{ asset('assetsWeb/js/SmoothScroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assetsWeb/js/move-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assetsWeb/js/easing.js') }}"></script>
        <!-- here stars scrolling script -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });

        </script>
        <!-- //here ends scrolling script -->
        <!-- //here ends scrolling icon -->

        <!-- scrolling script -->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });

        </script>
        <!-- //scrolling script -->

        <!-- FlexSlider-JavaScript -->
        <script defer src="{{ asset('assetsWeb/js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                SyntaxHighlighter.all();
            });
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

        </script>
        <!-- //FlexSlider-JavaScript -->

        <!-- typer js-->
        <!-- For banner text -->
        <script src='{{ asset('assetsWeb/js/jquery.typer.js'></script>
        <script>
            var win = $(window),
                foo = $('#typer');

            foo.typer(['Lets your hair do the talking', 'Wake up and smell the hair spray',
                'Grow Your Hair and Make Stylish'
            ]);

            // unneeded...
            win.resize(function() {
                var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)),
                    parseFloat(Number.NEGATIVE_INFINITY));

                foo.css({
                    fontSize: fontSize * .8 + 'px'
                });
            }).resize();

        </script>
        <!-- //typer js-->
        <!-- //For banner text -->

    </body>

    </html>
