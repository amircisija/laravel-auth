@extends('layouts.master')

@section('template_title')
	{{ Lang::get('titles.activation') }}
@endsection

@section('content')

<div class="subpage--wrapper">
    <div class="p-container">
        <section>
            <div class="overlay-shadow"></div>
            <div class="image" data-type="background" data-speed="5"></div>
            <div class="stuff my-auto" data-type="content">
                <div class="col-sm-12 mx-auto text-center">
                    <h2 class="display-3">Aktivacija naloga</h2>
                    <h3>Brzo, jednostavno, sigurno</h3>
                </div>
            </div>
        </section>
    </div>
</div>

<section id="actication--site" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="h2-responsive mb-5">
					{{ Lang::get('titles.activation') }}
				</h2>
				<p class="lead">{{ Lang::get('auth.regThanks') }}</p>
				<p class="lead">{{ Lang::get('auth.anEmailWasSent',['email' => $email, 'date' => $date ] ) }}</p>
				<a href='/activation' class="btn btn-primary">{{ Lang::get('auth.clickHereResend') }}</a>
			</div>
		</div>
	</div>
</section>

@endsection