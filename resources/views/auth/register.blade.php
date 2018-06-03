@extends('layouts.master')

@section('content')



<div class="subpage--wrapper">
        <div class="p-container">
            <section>
                <div class="overlay-shadow"></div>
                <div class="image" data-type="background" data-speed="5"></div>
                <div class="stuff my-auto" data-type="content">
                    <div class="col-sm-12 mx-auto text-center">
                        <h1 class="display-1">Registracija</h1>
                        <h2>Brza i jednostavna registracija</h2>
                    </div>
                </div>
            </section>
        </div>
    </div>


<section id="registration--site" class="py-5">



<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
                @include('partials.form-status')
        </div>
    </div>
        {!! Form::open(['route' => 'register', 'class' => 'form-horizontal col-sm-6 mx-auto', 'role' => 'form', 'method' => 'POST'] ) !!}
        <div class="row">
            <!-- Material input text -->
            <div class="col-sm-12 form-group">
                <div class="form-sm md-form form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                    {{--
                    <input type="text" id="materialFormRegisterNameEx" class="form-control"> --}} 
                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required']) !!} @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <label for="name">Korisničko ime</label>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-sm-6 form-group">
                <div class="form-sm md-form form-group{{ $errors->has('first_name') ? ' has-error' : '' }} ">
                    {{--
                    <input type="text" id="materialFormRegisterNameEx" class="form-control"> --}} 
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name', 'required']) !!} 
                    @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif
                    <label for="first_name">Ime</label>
                </div>
            </div>

            <div class="col-sm-6 form-group">
                <div class="form-sm md-form form-group{{ $errors->has('last_name') ? ' has-error' : '' }} ">
                    {{--
                    <input type="text" id="materialFormRegisterNameEx" class="form-control"> --}} 
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name', 'required']) !!} @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                    <label for="last_name">Prezime</label>
                </div>
            </div>

            <div class="clearfix"></div>


            <div class="col-sm-12 form-group">
                <div class="form-sm md-form form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{--
                    <input type="email" id="materialFormRegisterEmailEx" class="form-control"> --}} 
                    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'required']) !!} 
                    @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-sm-12 form-group">
                <div class="form-sm md-form form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{--
                    <input type="password" id="materialFormRegisterPasswordEx" class="form-control"> --}} 
                    {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required']) !!}
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <label for="password">Lozinka</label>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-sm-12 form-group">
                <div class="form-sm md-form form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    {{--
                    <input type="password" id="materialFormRegisterPasswordEx" class="form-control"> --}} 
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm',
                    'required']) !!}
                    <label for="password">Potvrdi lozinku</label>
                </div>
            </div>

            <div class="clearfix"></div>


            <div class="col-sm-8 mx-auto">
                @if(config('settings.reCaptchStatus'))
                <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ config('settings.reCaptchSite') }}"></div>
                </div>
                @endif
            </div>

            <div class="clearfix"></div>

            <div class="col-sm-6 mx-auto">
            <div class="text-center mt-4">
                <button class="btn btn-primary" type="submit">Registriraj se</button>
            </div>
        </div>
            {!! Form::close() !!}
    </div>



</section>

@endsection

@section('footer_scripts')

    <script src='https://www.google.com/recaptcha/api.js'></script>

@endsection