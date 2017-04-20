<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ trans('static.title') }}</title>
        <meta name="description" content="{{ trans('static.description') }}">
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">
        <script src="{{ url('/js/app.js') }}"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '{{ env('GOOGLE_ANALYTICS', '') }}', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        {{-- Comment out the navbar for the time being, it's not needed right now --}}
        {{-- <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!-- The following is in case the app is expanded by providing functionality to customise the text -->
                <li><a href="{{ url('/new/' . App::getLocale()) }}"><span class="glyphicon glyphicon-edit"></span> {{ __('static.personalise_this') }}</a></li>

                <!-- The following is for when the first additional language has been signed off -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('static.change_language') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">{{ __('languages.en') }}</a></li>
                        <li><a href="{{ url('/pt') }}">{{ __('languages.pt') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav> --}}
        <h1 class="title">{{ __('static.title') }}</h1>
        <p class="subtitle">{{ __('static.subtitle') }}</p>

        <a name="how-it-affects-me"></a>
        <section id="affects">
            <h2>{{ __('static.affects_title') }}</h2>
            <div class="section-body">
                <p>{{ __('static.affects_body') }}</p>
            </div>
        </section>

        <a name="how-you-can-help-me"></a>
        <section id="help">
            <h2>{{ __('static.help_title') }}</h2>
            <div class="section-body">
                <p>{{ __('static.help_body') }}</p>
            </div>
        </section>

        <a name="how-you-can-learn-more"></a>
        <section id="learn_more">
            <h2>{{ __('static.learn_more_title') }}</h2>
            <div class="section-body">
                {!! __('static.learn_more_body') !!}
            </div>
        </section>
        <footer>
            <a class="pull-right" rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
                <img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" />
            </a>
            <p>{!! __('static.footer') !!}</p>
        </footer>
    </body>
</html>
