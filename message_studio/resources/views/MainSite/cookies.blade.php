
        
        
	    @extends('MainSite.Layouts.app')

            @section('cover')		
                <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/klasicna2.jpg);">
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
            @endsection
	


            @section('content')
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
                            <th scope="col">Vklop / izklop</th>
                            </tr>
                        </thead>
               
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>XSRF-TOKEN</td>
                                <td>XSRF-TOKEN oziroma Cross Site Request Forgery token je žeton, ki preprečuje ugrabitev seje</td>
                                <td>2 uri</td>
                                <td>Obvezen piškot</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>laravel_session</td>
                                <td>laravel_session sledi dejavnosti uporabnika na spletni strani</td>
                                <td>2 uri</td>
                                <td>Obvezen piškot</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>_ga</td>
                                <td>Piškotek se uporablja za analitiko dostopa do spletne strani</td>
                                <td>2 leti</td>
                                <td>         
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>_gid</td>
                                <td>Piškotek se uporablja za razlikovanje med uporabniki. Piškotek ne vsebuje informacij o uporabniku.</td>
                                <td>24 ur</td>
                                <td>         
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
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

<!--
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
                            <hr/>-->


                            <h3>Pravica do ugovora</h3>
                            Pri obdelavi podatkov za namene neposrednega trženja, imate pravico, da kadar koli ugovarjate obdelavi osebnih podatkov v zvezi z vami za namene takega trženja, vključno z oblikovanjem profilov, kolikor je povezano s takim neposrednim trženjem.

                            <br></br>
                            <hr/>

                            <!--
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
                            <hr/>-->

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
                            
                            <div class="form-group">
									<input type="submit" value="Zbriši moje podatke" class="btn btn-primary submit-footer-cookies" data-toggle="modal" data-target="#exampleModal">
                                    
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Zbriši moje podatke</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row form-group">
                                            S tem ko boste vpisali vaš E-naslov preko katerega ste naročeni na naše E-novie, bomo vaš E-naslov izbrisali iz naše baze podatkov ter vas prenehali obveščati.
                                                <div class="col-md-12">
                                                    <input type="text" id="email" class="form-control mail-footer" placeholder="E-naslov*">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary e-mail" data-dismiss="modal">Zapri</button>
                                                <button type="button" class="btn btn-primary">Zbriši</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

          @endsection
