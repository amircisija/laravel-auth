@extends('layouts.master')

@section('content')



<div class="p-container">
    <section>
        <div class="overlay-shadow"></div>
        <div class="image" data-type="background" data-speed="5"></div>
        <div class="stuff my-auto" data-type="content">
            <div class="col-sm-7 mx-auto text-center">
            <h1 class="display-1">{!! config('app.name', Lang::get('titles.app')) !!}</h1>
            <h2>Prva web stranica za kupovinu kritpovaluta u BiH i Crnoj Gori</h2>
            <p class="lead mt-4">{!! config('app.name', Lang::get('titles.app')) !!} je stranica za posredovanje prilikom kupovine nekoliko kriptovaluta u Bosni i Hercegovini i Crnoj Gori. Naša Vizija je: «Postati apsolutni lider na tržišti kriptovaluta na području sjeverozapadnog Balkana.»</p>
        </div>
        </div>
    </section>
</div>

<div class="clearfix"></div>

<section class="s--1 s--dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <p class="lead">Jednostavno i sigurno</p>
                <h2 class="section-title">Kako radi Coinexpand.net?</h2>
                <p class="lead">3 jednostavna i sigurna koraka do kriptovalute</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</section>


<section class="s--1 s--dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere asperiores neque ipsum, voluptate fugit cumque
                        molestiae ratione! Doloremque, a voluptas et magnam consequatur voluptate quos mollitia qui architecto
                        in rem.</p>
                </div>
                <div class="col-sm-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere asperiores neque ipsum, voluptate fugit cumque
                        molestiae ratione! Doloremque, a voluptas et magnam consequatur voluptate quos mollitia qui architecto
                        in rem.</p>
                </div>
                <div class="col-sm-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere asperiores neque ipsum, voluptate fugit cumque
                        molestiae ratione! Doloremque, a voluptas et magnam consequatur voluptate quos mollitia qui architecto
                        in rem.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer_scripts')
@endsection