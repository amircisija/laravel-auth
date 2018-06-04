@extends('layouts.master')

@section('template_title')
    {{ trans('titles.activeUsers') }}
@endsection

@section('content')

<div class="subpage--wrapper">
    <div class="p-container">
        <section>
            <div class="overlay-shadow"></div>
            <div class="image" data-type="background" data-speed="5"></div>
            <div class="stuff my-auto" data-type="content">
                <div class="col-sm-12 mx-auto text-center">
                    <h2 class="display-3">Registracija naloga</h2>
                    <h3>Brzo, jednostavno, sigurno</h3>
                </div>
            </div>
        </section>
    </div>
</div>

<section id="active-user-site" class="py-5">

    <users-count :registered={{ $users }} ></users-count>

</section>
    
    

@endsection
