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

            <a href="#" class="btn btn--a btn-success btn-lg">Registracija</a>

        </div>
        </div>
    </section>
</div>

<div class="clearfix"></div>




<section>
    <div id="test--1"></div>    
</section>

<section id="app2" class="py-5">
    <div class="container">
        <div class="row">
            <crypto--ticker></crypto--ticker> 
            <crypto--calculator></crypto--calculator> 
        </div>
    </div>
</section>





<section class="s--1  py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <p class="lead">Jednostavno i sigurno</p>
                <h2 class="section-title">Kako radi Coinexpand.net?</h2>
                <p class="lead">3 jednostavna i sigurna koraka do kriptovalute</p>
            </div>
        </div>
        <div class="row py-5 services">
            <div class="col-sm-4">
                <img class="img-fluid mx-auto d-block mb-4" src="/images/s_1.png" alt="">
                <h3 class="service-text text-center">Registrujte se kako korisnik</h3>
                <p class="service-text text-center">Upišite osnovne lične podatke i e-mail adresu. Sačekajte email koji ćemo Vam poslati i potvrdite Vašu registraciju.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-fluid mx-auto d-block mb-4" src="/images/s_2.png" alt="">
                <h3 class="service-text text-center">Postanite verfikovani korisnik</h3>
                <p class="service-text text-center">Detaljno pročitajte sve o verifikacijskom procesu. Upišite sve tražene informacije i pošaljite potrebnu   dokumentaciju. Sačekajte e-mail verifikacijske potvrde ili molbe za dodatnim informacijama.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-fluid mx-auto d-block mb-4" src="/images/s_3.png" alt="">
                <h3 class="service-text text-center">Kupite ili prodajte kripto valute</h3>
                <p class="service-text text-center">Kupiti ili prodati mogu samo verifikovani korisnici. Sve detaljne informacije pročitajte u dijelu <a class="front-link" href="/qa">Q&A</a></p>
            </div>
        </div>
    </div>
</section>


<section class="s--2 s--dark py-5 bg-dark">
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