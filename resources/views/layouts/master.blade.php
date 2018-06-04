<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <link rel="shortcut icon" href="/favicon.ico">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')

            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

        </style>

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>



        @yield('head')

    </head>
    <body>
        <div id="app2">

            @include('partials.nav')



            @yield('content')

        </div>





      <footer class="footer py-5 bg-dark s--dark">
        <div class="container">
        <div class="row">
          <div class="col-12 col-md">
            <p class="lead">Prva web stranica za kupovinu kritpovaluta u BiH i Crnoj Gori</p>
            <small class="d-block mb-3 text-muted">
                Sva prava zadržana 
                   <span class="st-out">{!! config('app.name', Lang::get('titles.app')) !!}</span>  <?php echo date('Y'); ?>
            </small>
          </div>
          <div class="col-6 col-md">
            <h5>Linkovi</h5>
            <ul class="list-unstyled text-small">
              <li><a href="#">Početna</a></li>
              <li><a href="#">O nama</a></li>
              <li><a href="#">Vijesti</a></li>
              <li><a href="#">Q&A</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resursi</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Kupi</a></li>
              <li><a class="text-muted" href="#">Prodaj</a></li>
              <li><a class="text-muted" href="#">Prijava</a></li>
              <li><a class="text-muted" href="#">Registracija</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Legalno</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Uslovi korištenja</a></li>
              <li><a class="text-muted" href="#">Obrada ličnih podataka</a></li>
            </ul>
          </div>
        </div>
    </div>
      </footer>

        {{-- Scripts --}}
        <script src="{{ mix('/js/app.js') }}"></script>

        @if(config('settings.googleMapsAPIStatus'))
            {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
        @endif

        @yield('footer_scripts')


    </body>
</html>
