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
        <nav class="navbar navbar-default">
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
                <li><a href="{{ url('/new/' . App::getLocale()) }}"><span class="glyphicon glyphicon-edit"></span> {{ trans('static.change_text') }}</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('static.change_language') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">{{ trans('languages.en') }}</a></li>
                        <li><a href="{{ url('/pt') }}">{{ trans('languages.pt') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
        <h1 class="title">{{ trans('static.h1') }}</h1>
        <p class="subtitle">{{ trans('defaults.subtitle') }}</p>

        <a name="how-it-affects-me"></a>
        <h2>{{ trans('static.how_it_affects_me') }}</h2>
        <section id="how_it_affects_me">
            <p>{{ trans('defaults.how_it_affects_me') }}</p>
        </section>
        <a name="how-you-can-help-me"></a>
        <h2>{{ trans('static.how_you_can_help_me') }}</h2>
        <section id="how_you_can_help_me">
            <p>{{ trans('defaults.how_you_can_help_me') }}</p>
        </section>

        <a name="how-you-can-learn-more"></a>
        <h2>{{ trans('static.how_you_can_learn_more') }}</h2>
        <section id="how_you_can_learn_more">
            {!! trans('static.learn_more_body') !!}
        </section>
        <footer>
            <a class="pull-right" rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a>
            <p>This webpage was created by <a href="https://benargo.com">Ben Argo</a>, and is free for you to print, share and use. You can
                help out by <a href="https://github.com/benargo/ihaveautism.fyi/blob/master/contributing.md">translating this to other languages</a>.
                This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons
                Attribution-NonCommercial 4.0 International License</a>.</p>
        </footer>
    </body>
</html>
