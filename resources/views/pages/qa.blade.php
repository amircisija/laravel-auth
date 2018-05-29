@extends('layouts.master') @section('content')

<div class="subpage--wrapper">
    <div class="p-container">
        <section>
            <div class="overlay-shadow"></div>
            <div class="image" data-type="background" data-speed="5"></div>
            <div class="stuff my-auto" data-type="content">
                <div class="col-sm-12 mx-auto text-center">
                    <h1 class="display-1">Q&A</h1>
                    <h2>Na sva Vaša pitanja imamo odgovore</h2>
                </div>
            </div>
        </section>
    </div>
</div>

<section class="s--1  py-5">
    <div class="container">
        <div class="row py-5 services">

            <div class="col-md-4">
                <ul class="list-group help-group">
                    <div class="faq-list list-group nav nav-tabs">
                        <a href="#tab1" class="list-group-item active" role="tab" data-toggle="tab">Osnovna pitanja</a>
                        <a href="#tab2" class="list-group-item" role="tab" data-toggle="tab">
                            <i class="mdi mdi-account"></i> Kupovina i prodaja</a>
                        <a href="#tab3" class="list-group-item" role="tab" data-toggle="tab">
                            <i class="mdi mdi-account-settings"></i> My account</a>
                        <a href="#tab4" class="list-group-item" role="tab" data-toggle="tab">
                            <i class="mdi mdi-star"></i> Ostala pitanja</a>
                    </div>
                </ul>
            </div>

        

        <div class="col-md-8">
            <div class="tab-content panels-faq">
                <div class="tab-pane active" id="tab1">
                    <div class="panel-group" id="help-accordion-1">
                        <div class="panel panel-default panel-help">
                            <a href="#qa--1" data-toggle="collapse" data-parent="#help-accordion-1">
                                <div class="panel-heading">
                                    <h2>Šta je Coinexpand?</h2>
                                </div>
                            </a>
                            <div id="qa--1" class="collapse in">
                                <div class="panel-body p-3">
                                    <p><strong>Coinexpand.net</strong> je stranica za posredovanje prilikom kupovine nekoliko kriptovaluta u
                                            Bosni i Hercegovini i Crnoj Gori. Naša Vizija je: «Postati apsolutni lider na tržištu kriptovaluta na
                                            području sjeverozapadnog Balkana.»</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--2" data-toggle="collapse" data-parent="#help-accordion-1">
                                <div class="panel-heading">
                                    <h2>Kolika je provizija / cijena / kurs / naknada?</h2>
                                </div>
                            </a>
                            <div id="qa--2" class="collapse">
                                <div class="panel-body p-3">
                                    <p>Detalji kupovine/prodaje su konačni i precizni. Sve je već uračunato u kurs tako da nema
                                            dodatnih troškova. Trenutnu cijenu možete saznati u koraku prije pokretanja kupovine/prodaje
                                            unosom željenog iznosa u jednoj valuti, na što se odmah preračunava protuvrijednost. Naše
                                            cijene se generalno kreću na način kako je to opisano u dijelu “provizije” na <strong>coinexpand.net</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--3" data-toggle="collapse" data-parent="#help-accordion-1">
                                <div class="panel-heading">
                                    <h2>Što ako se kurs promijeni dok čekate uplatu?</h2>
                                </div>
                            </a>
                            <div id="qa--3" class="collapse">
                                <div class="panel-body p-3">
                                    <p>Količina kriptovalute je orijentaciona i zavisi od trenutne vrijednosti. Precizna količina određuje
                                            se u trenutku realizacije transakcije.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--4" data-toggle="collapse" data-parent="#help-accordion-1">
                                <div class="panel-heading">
                                    <h2>Možete li isplatiti ili primiti gotovinu uz sastanak uživo?</h2>
                                </div>
                            </a>
                            <div id="qa--4" class="collapse">
                                <div class="panel-body p-3">
                                    <p>Trenutno ne poslujemo gotovinom i ne nalazimo se s klijentima uživo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--5" data-toggle="collapse" data-parent="#help-accordion-1">
                                <div class="panel-heading">
                                    <h2>Što ako sam poslao nedovoljno ili previše?</h2>
                                </div>
                            </a>
                            <div id="qa--5" class="collapse">
                                <div class="panel-body p-3">
                                    <p>Kontaktirajte nas odgovorom na e-mail dobiven pri pokretanju kupovine/prodaje. Možemo prilagoditi
                                            detalje kupovine/prodaje stvarno poslanom iznosu, ili možete doplatiti nedostatak, tj. tražiti povrat viška.</p>
                                    <p>Molimo da sve kripto transakcije odašiljete s vlastitih e-novčanika koji će precizno poslati zadan iznos, a
                                            ne s burzi koje nisu namijenjene za takvo slanje pa često odgađaju isplate i ne šalju točno zadan iznos već
                                            ga umanje za nadoknadu (fee).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <div class="panel-group" id="help-accordion-2">
                        <div class="panel panel-default panel-help">
                            <a href="#qa--6" data-toggle="collapse" data-parent="#help-accordion-2">
                                <div class="panel-heading">
                                    <h2>Mogu li zaustaviti slanje ili promijeniti adresu svoje kupovine/prodaje?</h2>
                                </div>
                            </a>
                            <div id="qa--6" class="collapse in">
                                <div class="panel-body p-3">
                                    <p>Kontaktirajte nas odgovorom na e-mail dobiven pri pokretanju kupovine/prodaje, ali paralelno i drugim
                                            kanalima (Viber ili Whatsapp) ako je hitno. Situaciju ćemo moći riješiti ako već nismo izvršili slanje. Ako
                                            je kriptovaluta već poslana, transakcija je nepovratna i ne možemo pomoći.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--7" data-toggle="collapse" data-parent="#help-accordion-2">
                                <div class="panel-heading">
                                    <h2>Kako mogu platiti kovertibilnim markama (KM)?</h2>
                                </div>
                            </a>
                            <div id="qa--7" class="collapse in">
                                <div class="panel-body p-3">
                                    <p>Uplate primamo isključivo na bankovni račun firme. S vlastitog bankovnog računa možete platiti mobilnim i Internet
                                        bankarstvom ili u poslovnici Vaše banke ukoliko ste iz Crne Gore. Gotovinom možete platiti u svim poslovnicama
                                        banaka i pošte, bez obzira da li ste njihov klijent iz Crne Gore.</p>

                                    <p>
                                        Ukoliko uplatu vršite iz
                                        <strong>Bosne i Hercegovine</strong>, poslujemo isključivo u EUR valuti, a Vaša plaćanja možete izvršiti tako što
                                        za 5 minuta otvorite devizni račun u Vašoj banci. Najbolje bi bilo da se u bilo kojoj banci infromirate kako
                                        uplatiti novac u EUR valuti. Potrebno je da popunite INO nalog za plaćanje I bez problema ćemo zaprimiti
                                        Vaš novac.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--8" data-toggle="collapse" data-parent="#help-accordion-2">
                                <div class="panel-heading">
                                    <h2>Kada ćete poslati kriptovalutu?</h2>
                                </div>
                            </a>
                            <div id="qa--8" class="collapse in">
                                <div class="panel-body p-3">
                                    <p>Šaljemo čim primimo uplatu. Imamo račun u ERSTE banci. Uplate unutar iste banke stižu odmah neovisno o radnom
                                        vremenu, vikendu ili prazniku. Ostale uplate stižu isti dan kroz 2 do 4 sata ako su izvršene do 15 sati radnim
                                        danom, inače idući radni dan prijepodne. Uplate u Pošti ponekad stižu manje predvidljivo i sporije.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                            <a href="#qa--9" data-toggle="collapse" data-parent="#help-accordion-2">
                                <div class="panel-heading">
                                    <h2>Kako mogu primiti isplatu u konvertibilnim markama (KM)?</h2>
                                </div>
                            </a>
                            <div id="qa--9" class="collapse in">
                                <div class="panel-body p-3">
                                    <p>Isplate izvršavamo isključivo na bankovne račune. Pri pokretanju prodaje ćete navesti bankovni račun na koji
                                        želite da obavimo isplatu.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-help">
                                <a href="#qa--10" data-toggle="collapse" data-parent="#help-accordion-2">
                                    <div class="panel-heading">
                                        <h2>Kada ćete isplatiti EUR ili Konvertibilne marke (KM)?</h2>
                                    </div>
                                </a>
                                <div id="qa--10" class="collapse in">
                                    <div class="panel-body p-3">
                                        <p>Nalog potpisujemo čim primimo kriptovalutu. Uplata bi na računu trebala biti vidljiva kroz 2 do 4 sata
                                                ako je kriptovaluta primljen prije 15 sati radnim danom, a inače idući radni dan poslijepodne.
                                        </p>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                </div>
                <div class="tab-pane" id="tab3">
                    
                </div>
            </div>
        </div>

    </div>

    </div>
</section>
<script>
    $(function() {
    // Since there's no list-group/tab integration in Bootstrap
    $('.list-group-item').on('click',function(e){
     	  var previous = $(this).closest(".list-group").children(".active");
     	  previous.removeClass('active'); // previous list-item
     	  $(e.target).addClass('active'); // activated list-item
   	});
});
</script>


@endsection @section('footer_scripts') @endsection