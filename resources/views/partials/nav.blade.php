<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">{!! config('app.name', Lang::get('titles.app')) !!}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Početna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">O nama</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Kupi</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Prodaj</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Vijesti</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/qa">Q&A</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Kontakt</a>
      </li>
      @role('admin')
      <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" >
              Postavke <span class="caret"></span>
          </a>
          <ul class="dropdown-menu dropdown-primary" role="menu">
              <li {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                {!! HTML::link(url('/users'), Lang::get('titles.adminUserList'), array('class' => ' dropdown-item')) !!}
             </li>
              <li {{ Request::is('users/create') ? 'class=active' : null }}>{!! HTML::link(url('/users/create'), Lang::get('titles.adminNewUser'), array('class' => ' dropdown-item')) !!}</li>
              <li {{ Request::is('themes','themes/create') ? 'class=active' : null }}>{!! HTML::link(url('/themes'), Lang::get('titles.adminThemesList'), array('class' => ' dropdown-item')) !!}</li>
              <li {{ Request::is('logs') ? 'class=active' : null }}>{!! HTML::link(url('/logs'), Lang::get('titles.adminLogs'), array('class' => ' dropdown-item')) !!}</li>
              <li {{ Request::is('activity') ? 'class=active' : null }}>{!! HTML::link(url('/activity'), Lang::get('titles.adminActivity'), array('class' => ' dropdown-item')) !!}</li>
              <li {{ Request::is('phpinfo') ? 'class=active' : null }}>{!! HTML::link(url('/phpinfo'), Lang::get('titles.adminPHP'), array('class' => ' dropdown-item')) !!}</li>
              <li {{ Request::is('routes') ? 'class=active' : null }}>{!! HTML::link(url('/routes'), Lang::get('titles.adminRoutes'), array('class' => ' dropdown-item')) !!}</li>
              <li {{ Request::is('active-users') ? 'class=active' : null }}>{!! HTML::link(url('/active-users'), Lang::get('titles.activeUsers'), array('class' => ' dropdown-item')) !!}</li>
          </ul>
      </li>
    @endrole       
    </ul>

    <ul class="navbar-nav ml-auto">
                {{-- Authentication Links --}}
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{!! trans('titles.login') !!}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{!! trans('titles.register') !!}</a></li>
                @else


                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-expanded="false">

                            @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)
                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">
                            @else
                                <div class="user-avatar-nav"></div>
                            @endif

                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                                {!! HTML::link(URL::to('/profile/'.Auth::user()->name), trans('titles.profile'), array('class' => ' dropdown-item')) !!}

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>

                    </li>
                @endif
    </ul>

    



    </div>
</div>
  </nav>

