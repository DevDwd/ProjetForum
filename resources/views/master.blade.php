<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Apitalent</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Apitalent, la mobilité inter-entreprise">
        <meta name="keywords" content="Apitalent, mobilité">
 

        {{ HTML::style('assets/css/legacy/style.css') }}
        
        {{ HTML::style('assets/css/vendor/bootstrap.min.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/vendor/font-awesome.min.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/vendor/slick.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/vendor/jquery.datetimepicker.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/fonts.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/main.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/modal.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/form.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/table.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/login.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/cv.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/offers.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/candidatures.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/text-kernel.css?v='.Config::get('app.version')) }}
        {{ HTML::style('assets/css/print.css?v='.Config::get('app.version'), array('media' => 'print')) }}

        @yield('head_css')

        <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        {{ HTML::script('assets/js/jquery-1.10.2.min.js') }}
        {{ HTML::script('assets/js/jquery.customSelect.min.js') }}
        {{ HTML::script('assets/js/jquery.mask.min.js') }}
        {{ HTML::script('assets/js/jquery.mtz.monthpicker.js') }}
        {{ HTML::script('assets/js/autocomplete.js') }}
        {{ HTML::script('assets/js/bootstrap.min.js') }}
        {{ HTML::script('assets/js/moment-with-locales.min.js') }}
        {{ HTML::script('assets/js/pikaday.js') }}
        {{ HTML::script('assets/js/bday-picker.min.js') }}
        {{ HTML::script('assets/js/password_strength.js') }}
        
        {{ HTML::script('assets/js/apitalent.js') }}

        {{ HTML::script('assets/js/jquery.datetimepicker.js') }}
        {{ HTML::script('assets/js/slick.min.js') }}
        {{ HTML::script('assets/js/highcharts.js') }}
        {{ HTML::script('assets/js/main.js?v='.Config::get('app.version')) }}
        {{ HTML::script('assets/js/stats.js?v='.Config::get('app.version')) }}

    </head>

    <body class="new">
        <header class="header">
            <div class="container">
                <a href="{{ URL::route('home') }}" class="logo" title="Accueil">
                    {{ HTML::image('assets/img/logo-apitalent-two-lines.png', 'Apitalent') }}
                </a>

                @yield('menu')
            </div>
        </header>

        @yield('base_content')

        <footer class="footer">
            <div class="container">
                <div clas="row">
                    <div class="col-md-3">
                        <h3>Apitalent</h3>
                        <ul>
                            <li><a href="http://www.apitalent.fr" target="_blank">Mécanisme général</a></li>
                            <li><a href="{{ url('Tableau-comparatif-MVS-Cherpion.pdf') }}" target="_blank">Tableau comparatif</a></li>
                            <li><a href="{{ url('pages/charte') }}">Charte déontologique</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Conditions</h3>
                        <ul>
                            <li><a href="{{ url('pages/cgu') }}">C.G.U.</a></li>
                            <li><a href="{{ url('pages/cgv') }}">C.G.V.</a></li>
                            <li><a href="{{ url('pages/mentions') }}">Mentions légales</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Espace salarié</h3>
                        <ul>
                            <li><a href="{{ url('employees/create') }}">S'inscrire</a></li>
                            <li><a href="{{ url('login') }}">Se connecter</a></li>
                            <li><a href="http://www.apitalent.fr#contact" target="_blank">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Espace entreprise</h3>
                        <ul>
                            <li><a href="{{ url('enterprises/create') }}">S'inscrire</a></li>
                            <li><a href="{{ url('login') }}">Se connecter</a></li>
                            <li><a href="http://www.apitalent.fr#contact" target="_blank">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>

        <div class="copyright">
            © Copyright Apitalent
        </div>
    </body>
</html>
