@if (session('message'))
  <div class="alert alert-{{ Session::get('status') }} status-box  ">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;<span class="sr-only">Close</span></a>
    {{ session('message') }}
  </div>
@endif

@if (session('success'))
  <div class="alert alert-success alert-dismissable  in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h4><i class="icon fa fa-check fa-fw" aria-hidden="true"></i> Success</h4>
    {{ session('success') }}
  </div>
@endif

@if(session()->has('status'))
    @if(session()->get('status') == 'wrong')
        <div class="alert alert-danger status-box alert-dismissable  in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;<span class="sr-only">Close</span></a>
            {{ session('message') }}
        </div>
    @endif
@endif

@if (session('error'))
  <div class="alert alert-danger   in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h4>
      <i class="icon fa fa-warning fa-fw" aria-hidden="true"></i>
      Error
    </h4>
    {{ session('error') }}
  </div>
@endif

{{-- @if (count($errors) > 0)
  <div class="alert alert-danger alert-dismissable  in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h4>
      <i class="icon fa fa-warning fa-fw" aria-hidden="true"></i>
      <strong>{{ Lang::get('auth.whoops') }}</strong> {{ Lang::get('auth.someProblems') }}
    </h4>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif --}}

@if (count($errors) > 0)
  <div class="card color-block-dark danger-color-dark z-depth-2">
    <div class="card-body">
      <h4 class="card-title">
        <strong>{{ Lang::get('auth.whoops') }}</strong> <br>
        {{ Lang::get('auth.someProblems') }}</h4>

      @foreach ($errors->all() as $error)
      <p class="card-text">{{ $error }}</p>
      @endforeach
    </div>
  </div>
@endif