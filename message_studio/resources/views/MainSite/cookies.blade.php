
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--SEO time -->
        <title>Masazni salon Pallas | Vzemite si trenutek zase!</title>
        <meta name="description" content="Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, privoščite si čas zase in za svoje počutje">
        <meta name="keywords" content="masaža,klasična masaža,športna masaža,refleksna masaža stopal, masaža obraza, access bars terapija,zdravljenje,zdravje,sprostitev">
 

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154513897-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-154513897-1');
        </script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <!-- Scripts -->
        <script type="text/javascript" src="js/app.js" defer></script>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        
        <!-- Bootstrap -->
        <!--<script src="js/bootstrap.min.js"></script>-->
        
        <!-- Waypoints -->
        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
        
        <!-- Main -->
        <script type="text/javascript" src="js/main.js"></script>


          <!-- <script type="text/javascript" src="js/test.js"></script>-->
        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Orange tempalte fonts --->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">

        
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    
    </head>
    <body>

        <div id="page">
        @include('cookieConsent::index')
            <nav class="fh5co-nav" role="navigation">
                <div class="container">
                    <div class="row navbar">
                        <div class="col-xs-2 logo">
                            <a href="{{ route('RouteController.home')}}"><img class="img-responsive" src="images/logos/lotus_mini_logoo.png" alt="lotus logo"></a>
                        </div>
                        <div class="col-xs-10 menu-1 text-right">
                            <ul>
                                <li class="active"><a href="{{ route('RouteController.home')}}">Domov</a></li>
                                <li><a href="{{ route('RouteController.about')}}">O meni</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('RouteController.offer')}}">Ponudba</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Klasična masaža</a></li>
                                        <li><a href="#">Športna masaža</a></li>
                                        <li><a href="#">Refleksna masaža stopal</a></li>
                                        <li><a href="#">Sprostitvena masaža obraza</a></li>
                                        <li><a href="#">Acces Bars terapija</a></li>
                                    </ul>
                                </li>
                            
                                <li><a href="{{ route('RouteController.pricelist')}}">Cenik</a></li>
                                <li><a href="{{ route('RouteController.gallery')}}">Galerija</a></li>
                                <li><a href="{{ route('RouteController.blog')}}">Blog</a></li>
                                <li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        
        
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/header_home2.jpg);">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <div class="display-t">
                                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                        <h1>Zasebnost, piškotki in pristopna izjava</h1>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        
        
            <div id="fh5co-project">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
                            <h2 class="h2-animate">Piškotki</h2>
                            <p>Da bi vam omogočila karseda najboljšo uporabniško izkušnjo, uporabljamo piškotke, nekateri so obvezni za deovanje naše strani, nekatere pa uporabljamo za analizo podatkov, le te lahko sami tudi izklopite</p>
                        </div>
                    </div>
                    <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">oznaka</th>
                            <th scope="col">Namen uporabe</th>
                            <th scope="col">Življenska doba</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>XSRF-TOKEN</td>
                                <td>XSRF-TOKEN oziroma Cross Site Request Forgery token je žeton, ki preprečuje ugrabitev seje</td>
                                <td>enako dolgo kot "laravel_session"</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>laravel_session</td>
                                <td>laravel_session sledi dejavnosti uporabnika na spletni strani</td>
                                <td>2 uri</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>_ga</td>
                                <td>Piškotek se uporablja za analitiko dostopa do spletne strani</td>
                                <td>2 leti</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>_gid</td>
                                <td>Piškotek se uporablja za razlikovanje med uporabniki. Piškotek ne vsebuje informacij o uporabniku.</td>
                                <td>24 ur</td>
                            </tr>
                      
                          
                        </tbody>
                    </table>
                    </div>
                </div>  
            </div>

            <div id="fh5co-project">
                <div class="container">
                 
                    <div class="row">
                        <div class="col-1"></div>
                            <div class="col-10 pricelist">
                                <div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
                                    <h2 class="h2-animate">Zasebnost</h2>
                                </div>

                            <h3>Pogoji zasebnosti</h3>
                             V nadaljevanju vam želimo predstaviti informacije o tem, kako poteka obdelava vaših osebnih podatkov. Če v naslednjih poglavjih ni navedeno drugače, pravna podlaga za obdelavo vaših osebnih podatkov izhaja iz dejstva, da je takšna obdelava nepogrešljiva za dostop do funkcij spletnega mesta, ki ga zahtevate.

                            <br></br>
                            <hr/>

                            <h3>Dostop do spletnega mesta</h3>
                            Ko dostopate do spletnega mesta, vaš brskalnik prenese nekatere podatke na spletni strežnik. Razlogi za ta prenos so tehnične narave, obenem pa je nujen za to, da lahko dostopate do želenih informacij. Za potrebe zagotavljanja varnosti našega informacijskega sistema v spletnem dnevniku samodejno zbiramo podatke o vašem IP naslovu, datumu in času dostopa, razliki v časovnem pasu v primerjavi z greenwiškim časom (GMT), vsebini zahtevka (specifična stran), stanju dostopa oz. kodi stanja HTTP, količini prenesenih podatkov, spletni strani, ki zahteva dostop ter o vašem brskalniku (različica operacijskega sistema programske opreme brskalnika, jezikovne nastavitve). Brez, da bi nam posredovali vaš IP naslov, ki ga bomo zabeležili v spletnem dnevniku, ne morete uporabljati našega spletnega mesta.

                            Podatke spletnega dnevnika bomo obdelovali največ 12 mesecev, potem bomo podatke izbrisali, če ne bomo imeli drugega zakonitega razloga za nadaljnjo obdelavo.

                            Obvezna obdelava osebnih podatkov v obliki spletnega dnevnika, namenjena zagotavljanju varnosti naše storitve, našega omrežja in informacij, temelji na točki f 1. odstavka 6. člena v zvezi z 49. odstavkom preambule Splošne uredbe o varstvu podatkov (GDPR).
                        
                            <br></br>
                            <hr/>

                            <h3>Uporaba piškotkov</h3>
                            S klikom na gumb »Strinjam se«, s katerim vključim uporabo piškotkov, izjavljam, da sem polnoletna oseba in prostovoljno dajem privolitev za obdelavo svojih osebnih podatkov.

                            S to privolitvijo se strinjam, da lahko kot upravljavec osebnih podatkov za namen analiziranja spletnih obiskov v moj računalnik namestite piškotke in podatke o uporabljenih piškotkih ter anonimiziran IP naslov posredujete obdelovalcu Google Inc., ki je v tretji državi.

                            Privolitev za uporabo piškotkov ni obvezna. Imate pravico, da vašo privolitev za uporabo piškotkov, če ste jo dali, kadarkoli prekličete.

                            Osebne podatke, zbrane na podlagi vaše privolitve z uporabo piškotkov, bomo obdelovali največ 14 mesecev, nato bomo podatke anonimizirali ali izbrisali.

                            Preklic vaše privolitve ne vpliva na zakonitost obdelave na podlagi privolitve pred njenim preklicem.

                            Na vsaki spletni strani našega spletnega mesta lahko s pomočjo povezave »Piškotki« na dnu spletne strani kadarkoli izbrišete piškotke in s tem hkrati prekličete vašo privolitev.

                            Zbrane osebne podatke bodo obdelovali naši zaposleni, ki so skrbniki spletnega mesta in skrbniki, ki skrbijo za varnost našega informacijskega sistema.

                            Obdelava osebnih podatkov, ki uporablja piškotke, temelji na točki a 1. odstavka 6. člena Splošne uredbe o varstvu podatkov (GDPR).

                            <br></br>
                            <hr/>

                            <h3>Pravica do izbrisa (pravica do pozabe)</h3>

                            Pravico imate doseči, da brez nepotrebnega odlašanja izbrišemo osebne podatke v zvezi z vami, mi pa imamo kot upravljavec obveznost vaše osebne podatke brez nepotrebnega odlašanja izbrisati v naslednjih primerih:

                            - obdelavi ugovarjate (glejte pravico do ugovora),
                            - prekličete privolitev, na podlagi katere poteka obdelava,
                            - osebne podatke smo obdelali nezakonito,
                            - osebne podatke moramo izbrisati zaradi izpolnitve zahtev v predpisih.

                            Izbris se <b>ne izvede</b>, če je obdelava osebnih podatkov potrebna:

                            - za izpolnjevanje pravne obveznosti obdelave na podlagi predpisov,
                            - za uveljavljanje, izvajanje ali obrambo pravnih zahtevkov.
                            - Če kot posameznik želite, da vaše osebne podatke izbrišemo, lahko to pisno zahtevate po elektronski pošti: pallasmasaznisalon@gmail.com Pravico do izbrisa lahko uveljavljate samo v omejenih primerih, ki so našteti zgoraj.

                            <br></br>
                            <hr/>

                            <h3>Pravica do popravka</h3>

                            Pravico imate doseči, da brez nepotrebnega odlašanja popravimo netočne osebne podatke v zvezi z vami.

                            Ob upoštevanju namenov obdelave imate pravico do dopolnitve nepopolnih osebnih podatkov, vključno s predložitvijo dopolnilne izjave.

                            <br></br>
                            <hr/>

                            <h3>Pravica do ugovora</h3>
                            Pri obdelavi podatkov za namene neposrednega trženja, imate pravico, da kadar koli ugovarjate obdelavi osebnih podatkov v zvezi z vami za namene takega trženja, vključno z oblikovanjem profilov, kolikor je povezano s takim neposrednim trženjem.

                            <br></br>
                            <hr/>

                            <h3>Pravica do omejitve obdelave </h3>
                            Pravico imate doseči, da omejimo obdelavo vaših osebnih podatkov v primeru:

                            - če oporekate točnosti podatkov, in sicer za obdobje, ki nam omogoča preveriti točnost osebnih podatkov,
                            - je obdelava nezakonita in nasprotujete izbrisu osebnih podatkov ter namesto tega zahtevate omejitev njihove uporabe,
                            - vaših osebnih podatkov ne potrebujemo več za namene obdelave, temveč jih za uveljavljanje, izvajanje ali obrambo pravnih zahtevkov potrebujete vi sami,
                            - ste vložil ugovor v zvezi z obdelavo, dokler ni ugotovljeno ali naši zakoniti razlogi prevladajo nad vašimi razlogi.
                            -
                            Če boste zahtevali omejitev iz navedenih razlogov, potem lahko vaše osebne podatke le še shranjujemo, vse druge vrste obdelav pa lahko izvajamo le:

                            - z vašo privolitvijo,
                            - za uveljavljanje, izvajanje ali obrambo pravnih zahtevkov,
                            - zaradi varstva pravic druge fizične ali pravne osebe ali
                            - zaradi pomembnega javnega interesa Unije ali države članice.

                            Pred preklicem (torej prenehanjem) omejitve obdelave osebnih podatkov vas moramo o preklicu omejitve obvestiti.

                            <b>Če smo zavrnili vašo zahtevo po izbrisu podatkov ali pa želite le omejiti obdelavo vaših osebnih podatkov, lahko pisno po elektronski pošti (pallasmasaznisalon@gmail.com) zahtevate, da omejimo obdelavo vaših osebnih podatkov. Pravico do omejitve lahko uveljavljate samo v omejenih primerih, ki so našteti zgoraj.</b>

                            <br></br>
                            <hr/>

                            <h3>Pravica do pritožbe nadzornemu organu </h3>

                            Brez poseganja v katero koli drugo upravno ali pravno sredstvo imate pravico, da vložite pritožbo pri nadzornem organu, zlasti v državi članici, v kateri imate običajno prebivališče, v kateri je vaš kraj dela ali v kateri je domnevno prišlo do kršitve, če menite, da obdelava osebnih podatkov v zvezi z vami krši Splošno uredbo o varstvu podatkov.

                            Nadzorni organ, pri katerem je vložena pritožba, vas bo obvestil o stanju zadeve in odločitvi o pritožbi, vključno z možnostjo pravnega sredstva na podlagi 78. člena Splošne uredbe o varstvu podatkov.

                            Kot posameznik, na katerega se nanašajo osebni podatki, imate pravico, da vložite pritožbo na naslov:

                            Republika Slovenija, Informacijski pooblaščenec, Dunajska cesta 22, 1000 Ljubljana, telefon: 01 230 97 30, e-pošta: gp.ip@ip-rs.si

                            Informacijski pooblaščenec vas bo skladno s predpisi obvestil o stanju zadeve in njegovi odločitvi o pritožbi.


                            <br></br>
                            <hr/>
                            <h3>Posredovanje osebnih podatkov</h3>
                            Osebne podatke bomo posredovali v tretjo državo, ker je naš obdelovalec Google Inc. iz Združenih držav Amerike.

                            Osebnih podatkov razen prej navedenih izjem ne bomo posredovali tretjim osebam ali v tretje države, razen v primerih, ki jih določa zakon, kar se nanaša predvsem na primere, če bi podatke zahtevale za to pooblaščene osebe oziroma organi.
                            </div>
                    
                        <div class="col-1"></div>
                   
                    </div>
                </div>  
            </div>


            
            <div id="fh5co-project">
                <div class="container">
                
                    <div class="row">
                        <div class="col-1"></div>
                            <div class="col-10 pricelist">
                                <div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
                                    <h2 class="h2-animate">Pristopna izjava</h2>
                                </div>
                            <h3>Privolitev</h3>
                            vpisom svojega elektronskega naslova in s klikom na gumb »Strinjam se« izjavljam, da sem polnoletna oseba in prostovoljno dajem privolitev v obdelavo svojih osebnih podatkov in s tem dovoljujem njihovo obdelavo z namenom neposrednega pošiljanja elektronskih novic in drugih objav, vabil na dogodke ter informacij s področja delovanja masažnega salona Pallas, Bistriška cesta 60a (v nadaljevanju: upravljavca) po elektronski pošti na moj elektronski naslov.

                            Brez, da bi nam posredovali osebne podatke, se ne morete naročiti na prejemanje naših elektronskih novic in obvestil oziroma vabil na naše dogodke, saj vam brez vašega elektronskega naslova sporočil ne moremo dostaviti. S to privolitvijo se strinjam, da lahko upravljavec osebnih podatkov:

                            za namen pošiljanja elektronskih novic, obvestil in vabil upravljavca zbira podatke o mojem elektronskem naslovu;
                            za namen analize učinkovitosti obvestil in vabil zbira podatke o času odprtja in povezavi, kliknjeni v sporočilu.
                            Upravljavec bo razen zgoraj navedenih podatkov izključno za potrebe dokazovanja osebne privolitve zbiral podatek o naslovu spletne strani, na kateri je bila dana privolitev ter IP naslov posameznika, ko je dal privolitev in čas privolitve ter datum in čas odprtih sporočil. Za namene spremljanja odjav in omejitev obdelave bo zbiral datum odjave oziroma omejitve obdelave.

                            Upravljavec zbranih osebnih podatkov ne bo posredoval tretjim osebam.

                            Upravljalec lahko posreduje osebne podatke uporabnikov v primeru kazenskih in civilnih postopkov v obsegu, kot ga določa zakonodaja.

                            Imate pravico, da se od elektronskih novic in obvestil oziroma vabil na dogodke kadarkoli odjavite oziroma prekličete vašo privolitev.

                            Z vsakim sporočilom, ki bo vseboval novico, obvestilo ali vabilo, bomo poslali tudi povezavo na spletno stran z enostavno odjavo oziroma preklicem privolitve.

                            Osebne podatke bomo obdelovali tako dolgo, dokler ne bomo prejeli vaše zahteve za odjavo, ki samodejno pomeni preklic privolitve. Po prejemu zahteve za odjavo ne bomo več uporabljali zbranih osebnih podatkov za pošiljanje elektronskih novic oziroma vabil na dogodke. Po odjavi oziroma preklicu privolitve bodo podatki ostali shranjeni v naši zbirki podatkov še pet let, nato jih bomo izbrisali.

                            Preklic privolitve ne vpliva na zakonitost obdelave na podlagi privolitve pred njenim preklicem.
                            Zbrane osebne podatke bodo obdelovali naši zaposleni, ki so zadolženi za pošiljanje novic in obvestil oziroma vabil po elektronski in/ali navadni pošti.

                            Obdelava osebnih podatkov temelji na točki a 1. odstavka 6. člena Splošne uredbe o varstvu podatkov (GDPR).

                            <br></br>
                            <hr/>
                            
                            <h3>Kontaktni podatki</h3>
                            Upravljavec osebnih podatkov za to privolitev je:

                            Masažni salon Pallas, Bistriška cesta 60a, 2319 Poljčane, e-pošta: pallasmasaznisalon@gmail.com

                            Pooblaščena oseba za varstvo podatkov upravljavca je:

                            Ksenija Lavrenčič, GSM: +386 40 853 650, e-pošta: pallasmasaznisalon@gmail.com

                            <br></br>
                            <hr/>
                            
                            <h3>Pravica do izbrisa (pravica do pozabe)</h3>

                            Pravico imate doseči, da brez nepotrebnega odlašanja izbrišemo osebne podatke v zvezi z vami, mi pa imamo kot upravljavec obveznost vaše osebne podatke brez nepotrebnega odlašanja izbrisati v naslednjih primerih:

                            - obdelavi ugovarjate (glejte pravico do ugovora),
                            - prekličete privolitev, na podlagi katere poteka obdelava,
                            - osebne podatke smo obdelali nezakonito,
                            - osebne podatke moramo izbrisati zaradi izpolnitve zahtev v predpisih.
                            
                            Izbris se <b>ne izvede</b>, če je obdelava osebnih podatkov potrebna:

                            - za izpolnjevanje pravne obveznosti obdelave na podlagi predpisov,
                            - za uveljavljanje, izvajanje ali obrambo pravnih zahtevkov.
                            - Če kot posameznik želite, da vaše osebne podatke izbrišemo, lahko to pisno zahtevate po elektronski pošti: pallasmasaznisalon@gmail.com Pravico do izbrisa lahko uveljavljate samo v omejenih primerih, ki so našteti zgoraj.
                            
                            <br></br>
                            <hr/>
                            
                            <h3>Pravica do popravka</h3>

                            Pravico imate doseči, da brez nepotrebnega odlašanja popravimo netočne osebne podatke v zvezi z vami.

                            Ob upoštevanju namenov obdelave imate pravico do dopolnitve nepopolnih osebnih podatkov, vključno s predložitvijo dopolnilne izjave.

                            <br></br>
                            <hr/>
                            
                            <h3>Pravica do ugovora</h3>
                            Pri obdelavi podatkov za namene neposrednega trženja, imate pravico, da kadar koli ugovarjate obdelavi osebnih podatkov v zvezi z vami za namene takega trženja, vključno z oblikovanjem profilov, kolikor je povezano s takim neposrednim trženjem.

                            <br></br>
                            <hr/>

                            <h3>Pravica do omejitve obdelave </h3>
                            Pravico imate doseči, da omejimo obdelavo vaših osebnih podatkov v primeru:

                            - če oporekate točnosti podatkov, in sicer za obdobje, ki nam omogoča preveriti točnost osebnih podatkov,
                            - je obdelava nezakonita in nasprotujete izbrisu osebnih podatkov ter namesto tega zahtevate omejitev njihove uporabe,
                            - vaših osebnih podatkov ne potrebujemo več za namene obdelave, temveč jih za uveljavljanje, izvajanje ali obrambo pravnih zahtevkov potrebujete vi sami,
                            - ste vložil ugovor v zvezi z obdelavo, dokler ni ugotovljeno ali naši zakoniti razlogi prevladajo nad vašimi razlogi.
                            -
                            Če boste zahtevali omejitev iz navedenih razlogov, potem lahko vaše osebne podatke le še shranjujemo, vse druge vrste obdelav pa lahko izvajamo le:

                            - z vašo privolitvijo,
                            - za uveljavljanje, izvajanje ali obrambo pravnih zahtevkov,
                            - zaradi varstva pravic druge fizične ali pravne osebe ali
                            - zaradi pomembnega javnega interesa Unije ali države članice.

                            Pred preklicem (torej prenehanjem) omejitve obdelave osebnih podatkov vas moramo o preklicu omejitve obvestiti.

                            <b>Če smo zavrnili vašo zahtevo po izbrisu podatkov ali pa želite le omejiti obdelavo vaših osebnih podatkov, lahko pisno po elektronski pošti (pallasmasaznisalon@gmail.com) zahtevate, da omejimo obdelavo vaših osebnih podatkov. Pravico do omejitve lahko uveljavljate samo v omejenih primerih, ki so našteti zgoraj.</b>

                            <br></br>
                            <hr/>
                            
                            <h3>Pravica do pritožbe nadzornemu organu </h3>

                            Brez poseganja v katero koli drugo upravno ali pravno sredstvo imate pravico, da vložite pritožbo pri nadzornem organu, zlasti v državi članici, v kateri imate običajno prebivališče, v kateri je vaš kraj dela ali v kateri je domnevno prišlo do kršitve, če menite, da obdelava osebnih podatkov v zvezi z vami krši Splošno uredbo o varstvu podatkov.

                            Nadzorni organ, pri katerem je vložena pritožba, vas bo obvestil o stanju zadeve in odločitvi o pritožbi, vključno z možnostjo pravnega sredstva na podlagi 78. člena Splošne uredbe o varstvu podatkov.

                            Kot posameznik, na katerega se nanašajo osebni podatki, imate pravico, da vložite pritožbo na naslov:

                            Republika Slovenija, Informacijski pooblaščenec, Dunajska cesta 22, 1000 Ljubljana, telefon: 01 230 97 30, e-pošta: gp.ip@ip-rs.si

                            Informacijski pooblaščenec vas bo skladno s predpisi obvestil o stanju zadeve in njegovi odločitvi o pritožbi.

                            
                            </div>
                        <div class="col-1"></div>
                    </div>  
                </div>
            </div>

            <footer id="fh5co-footer" role="contentinfo">
                <div class="container footer-container">
                    <div class="row row-pb-md">              
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
                            <div class="col-xs-2 logo">
                                <a href="{{ route('RouteController.home')}}"><img class="img-responsive-footer" src="images/resized_logo_beli.png" alt="pallas logo beli"></a>
                            </div>
						</div>
						
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-2">
                            <h3>Kontakt</h3>
                            <p>Bistriška cesta 60a <br> 2319 Poljčane <br> 040 853 650 <br> pallasmasaznisalon@gmail.com</p>
						</div>
						
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                        	<h3 class="footer-text">Delovni čas</h3>
                            <p>Po dogovoru</p>
						</div>
						
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                            <h3>Naročite se na E-novice</h3>     
                                               
								<div class="row form-group">
									<div class="col-md-12">
										<input type="text" id="email" class="form-control mail-footer" placeholder="E-naslov*">
									</div>
                                </div>
                                
                                <div class="form-group">
									<input type="submit" value="Naroči se" class="btn btn-primary submit-footer" data-toggle="modal" data-target="#exampleModal">
                                    
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Naročanje na E-novice</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                S klikom na gumb "Strinjam se" se strinjate, da lahko obdelujemo podatke (vaš e-poštni naslov), ki ste ga navedli v vpisnem okencu za namen pošiljanja ponudb, novic, obvestil itd. Prav tako pa klikom na gumb soglašate s pogoji pristopne izjave.

                                                pravico imate, da se od e-novic kadarkoli odjavite.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary e-mail" data-dismiss="modal">Zapri</button>
                                                <button type="button" class="btn btn-primary">Strinjam se</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>

                        
                    </div>
             
                    
                    
					<hr class="hr-footer">
					
                             
                </div>
                <div class="container">
                    <div class="row row-pb-md-footer">
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
                            <p class="p-footer">2020 Pallas©. Vse pravice pridržane</p>
						</div>
						
						
                        <div class="col-md-6 col-sm-12 col-xs-12 fh5co-widget-footer col-md-push-3">
                            <a href="https://www.facebook.com/lovrencicksenijaterapevtskimaser"><img class="img-icon" src="images/icons/icons_social/facebook-24.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/pallas_masazni_salon/"><img class="img-icon" src="images/icons/icons_social/instagram-24-2.png" alt="instagram"></a>
                        </div> 
                        
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                            <a href="{{ route('RouteController.cookies')}}" class="cookies-hover-footer">piškotki in zasebnost</a>
						</div>   
                      
                    </div>
                </div>
        
            </footer>

       
        </div>
    </body>
</html>



