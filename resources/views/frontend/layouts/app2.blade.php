<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        @isset($pag)
          <title>Universidad Nacional Jorge Basadre Grohmman</title>
        @endisset

        @empty($pag)
            <title>@yield('title', app_name())</title>
        @endempty


        <link rel="shortcut icon" href="{{('/icon/escudo.ico') }}">



        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->

        <!--{{ Html::style('css/bootstrap.min.css') }}-->

        @langRTL
            {{ Html::style(getRtlCss(mix('css/frontend.css'))) }}
        @else
            {{ Html::style(mix('css/frontend.css')) }}
            {{ Html::style('css/estilospersonalizados.css') }}
            {{ Html::style('css/lightbox.css') }}
            {{ Html::style('css/style.css') }}
            {{ Html::style('css/fuentes.css') }}
            {{ Html::style('css/fuentesdos.css') }}
            {{ Html::style('css/custom.css') }}


        @endif

        @yield('after-styles')






        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app-layout">
        <div id="app" >

            @isset($login)
            @include('frontend.includes.nav')
            @endisset

            @empty($login)
                @include('frontend.includes.navv')
            @endempty

            @include('includes.partials.logged-in-as')
            <div class="container-fluid main" id="page-top">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
            <div>
                @yield('seccction2')
            </div>





        </div><!--#app-->

        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(mix('js/frontend.js')) !!}
        @yield('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
