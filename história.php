<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Popis mojej stránky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Real Madrid</title>
</head>
<body>
    <header>
        <?php
        $file_path = "parts/nav.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>
    </header>

    <div class="history">
        <h3>HISTÓRIA REALU MADRID</h3>
        <!--akordeón-->
        <button class="akordeon">Klub</button>
        <!--história klubu-->
        <div class="panel">
            <h3>Real Madrid, založený v roku 1902, sa stal jedným z najvýznamnejších a najúspešnejších futbalových klubov na svete. Jeho bohatá história je pozoruhodným príbehom plným triumfov, legendárnych hráčov a vášnivých fanúšikov.</h3>
            <img class="historia" src="img/firstteam.jpg" alt="prvy tim" width="500">
            <h2>Zakladajúce roky</h2>
            <p>Real Madrid vznikol iniciatívou študentov a učiteľov. Od svojich skromných začiatkov sa klub rýchlo etabloval ako jedno z lídrov španielskeho futbalu. Prvé úspechy klub zažil už v počiatkoch 20. storočia, no jeho výrazné postavenie prišlo v 50. rokoch.</p>
            <img class="historia" src="img/madrid.jpg" alt="" width="550">
            <h2>Éra "Bieleho baletu"</h2>
            <p>V 50. rokoch zaznamenal Real Madrid historický úspech, keď vyhral prvých päť ročníkov Ligy majstrov UEFA od roku 1956 do 1960. Hráči ako Alfredo Di Stéfano, Francisco Gento a Ferenc Puskás sa stali legendami a ich kombinačný futbal si vyslúžil prezývku "Biele balet". Táto éra zanechala nezmazateľnú stopu v histórii klubu.</p>
            <img class="historia" src="img/prvytitul.jpg" alt="prvy titul" width="550">
            <h2>Nástup do novej éry</h2>
            <p>Po obdobiach relatívneho útlmu nasledoval nástup nových ikon. V roku 2000 získal Real Madrid deviaty titul v Lige majstrov po víťazstve nad Valenciou. Cristiano Ronaldo, ktorý prišiel v roku 2009, sa stal jedným z najvýraznejších hráčov klubu a prispel k ďalším triumfom v roku 2014 a potom v sérii rokov 2016, 2017 a 2018.</p>
            <img class="historia" src="img/novaera.jpg" alt="nova era" width="550">
            <h2>Historické triumfy</h2>
            <p>Klub si získal obdiv fanúšikov a rešpekt súperov aj v domácej La Lige, kde má mnoho titulov. Okrem triumfov v Lige majstrov patrí medzi jeho výrazné úspechy aj zisk Copa del Rey, Supercopa de España a ďalších národných a medzinárodných titulov.</p>
            <img class="historia" src="img/copa.jpg" alt="copa del rey" width="550">
            <h2>Ikony klubu</h2>
            <p>Real Madrid má v histórii klubu mnoho ikonických hráčov, od Di Stéfana po Zidana, od Puskása po Raúla až po súčasné hviezdy ako Sergio Ramos a Karim Benzema. Ich prínos a oddanosť klubu ich spravili neoddeliteľnou súčasťou jeho histórie.</p>
            <img class="historia" src="img/legends.jpg" alt="legendy" width="550">
            <h2>Fanúšikovská vášeň</h2>
            <p>Fanúšikovia Realu Madrid, známi ako "Madridistas", sú jednými z najoddanejších na svete. Santiago Bernabéu, štadión klubu, je miestom, kde sa odohrávajú vášnivé zápasy a vytvárajú sa nezabudnuteľné spomienky.</p>
            <img class="historia" src="img/fans.jpg" alt="fanusikovia" width="400">
            <p>Celkovo je história Realu Madrid fascinujúcim príbehom o úspechoch, prekonávaní výziev a vytváraní futbalovej legendy. Jeho biela farba symbolizuje čistotu jeho hry, a jeho historický význam robí z klubu neodmysliteľnú súčasť svetového futbalu.</p>
        </div>

        <button class="akordeon">Znak</button>
        <!--história znaku-->
        <div class="panel">
            <h3>História znaku Realu Madrid nie je príliš zložitá a tím robil v počiatočných fázach histórie klubu iba malé zmeny. Prvá väčšia zmena prišla až v roku 1941, dva roky po občianskej vojne a odvtedy sa logo menilo už iba raz.</h3>
            <p>Prvý znak uzrel svetlo sveta v roku 1902 a vidieť v ňom môžeme písmená MCF, ktoré sú prekladané na bielom pozadí.</p>
            <img class="logo1" src="img/1.znak.jpg" alt="1.znak">
            <p>O šesť rokov neskôr sa madridský klub rozhodol spraviť menšie úpravy. Pribudol kruh ohraničujúci prekladanie písmen, ktoré so zmenou fontu tak isto prešlo menšou úpravou. Farby však ostali rovnaké.</p>
            <img class="logo1" src="img/2.znak.jpg" alt="2.znak">
            <p>Historicky dôležitá zmena prišla v roku 1920 s príchodom nového prezidenta Pedra Paragesa. V tomto roku totiž klub z hlavného mesta Španielska získal výsadu “kráľovský”, ktorú mu udelil kráľ Alfonso XIII. V klube sa túto udalosť rozhodli osláviť pridaním kráľovskej koruny do znaku a začalo sa hovoriť o “Reale Madrid” (kráľovskom).</p>
            <img class="logo1" src="img/3.znak.jpg" alt="3.znak">
            <p>Po páde monarchie a nastolení tzv. Druhej španielskej republiky bola koruna odstránená a titul “Real” bol klubu odobratý. Náhradou za korunu mal byť tmavý pruh v pozadí loga.</p>
            <img class="logo1" src="img/4.znak.jpg" alt="4.znak">
            <p>Dva roky po skončení občianskej vojny (rok 1941), Real Madrid v logu obnovil kráľovskú korunu, ale pruh v pozadí zachoval. Znak taktiež dostal nové farby, pričom dominuje “kráľovsky” zlatá.</p>
            <img class="logo1" src="img/5.znak.jpg" alt="5.znak">
            <p>Posledné zmeny, ktoré sa od roku 1941 vykonali boli veľmi malé. V roku 2001 dostal pruh v pozadí sýtejšie modrú farbu a nový sklon. Celkový vzhľad loga sa tak isto mierne zmenil, ale to len kvôli tomu, aby lepšie vystihoval moderné 21. storočie.</p>
            <img class="logo1" src="img/6.znak.jpg" alt="6.znak">
        </div>

        <button class="akordeon">Liga Majstrov</button>
        <!--história ligy majstrov-->
        <div class="panel">
            <h3>Real je najúspešnejším klubom v histórii najprestížnejšej klubovej súťaže na svete, pričom titul získal celkovo 14 krát</h3>
            <img class="ligamajstrov" src="img/ligamajstrov.jpg" alt="liga majstrov" width="400">
            <p>Real Madrid je jedným z najvýznamnejších a najúspešnejších futbalových klubov na svete s bohatou históriou v Lige majstrov UEFA, ktorá je najprestížnejšou európskou klubovou súťažou. Klub bol založený v roku 1902 a od tej doby sa stal jedným z najvýraznejších klubov na svetovej futbalovej scéne.</p>
            <p>História Realu Madrid v Lige majstrov sa začala v jej raných rokoch. Klub prvýkrát zvíťazil v tejto súťaži v roku 1956, keď porazil francúzsky Stade de Reims vo finále. Nasledovala éra slávy, keď Real Madrid získal prvých päť titulov v histórii Ligy majstrov v rokoch 1956-1960. Táto éra bola tiež spojená s legendárnym tímom známym ako "Biele balet".</p>
            <img class="ligamajstrov" src="img/prvytitul.jpg" alt="prvy titul liga majstrov" width="400">
            <p>Prvý titul - 1956</p>
            <img class="ligamajstrov" src="img/piatytitul.jpg" alt="piaty titul liga majstrov" width="400">
            <p>Piaty titul - 1960</p>
            <p>Ďalšie výrazné obdobia úspechu prišli 90. rokoch 20. storočia, keď Real Madrid získal ďalšie tri tituly v rokoch 1998, 2000 a 2002. Klub mal v tej dobe vynikajúcich hráčov, ako boli Emilio Butragueño, Michel, Raúl a ďalší.</p>
            <img class="ligamajstrov" src="img/siedmytitul.jpg" alt=" siedmy titul liga majstrov" width="400">
            <p>Siedmy titul - 1998</p>
            <img class="ligamajstrov" src="img/deviatytitul.jpg" alt="deviaty titul liga majstrov" width="400">
            <p>Deviaty titul - 2002</p>
            <p>V nedávnej dobe, v prvom desaťročí 21. storočia, Real Madrid opäť začal dominovať v Lige majstrov. V sezóne 2013/2014 pod vedením trénera Carla Ancelottiho klub získal desiaty titul, čo bolo historické víťazstvo a bolo označované ako "La Decima". Nasledovali ďalšie triumfy v rokoch 2016, 2017 a 2018, pričom väčšina týchto úspechov bola spojená s výnimočným útokom vedeným Cristianom Ronaldom.</p>
            <img class="ligamajstrov" src="img/desiaty.jpg" alt="desiaty titul liga majstrov" width="400">
            <p>Desiaty titul - 2014</p>
            <img class="ligamajstrov" src="img/jedenasty.jpg" alt="jedenasty titul liga majstrov" width="400">
            <p>Jedenásty titul - 2016</p>
            <img class="ligamajstrov" src="img/dvanasty.jpg"  alt="dvanasty titul liga majstrov" width="400">
            <p>Dvanásty titul - 2017</p>
            <img class="ligamajstrov" src="img/trinasty.jpg" alt="trinasty titul liga majstrov" width="400">
            <p>Trinásty titul - 2018</p>
            <p>Posledný titul v Lige majstrov získal Real Madrid v roku 2022, kedy vo finále porazil Liverpool 1:0. Bol to jeho 14. titul v Lige majstrov a zároveň jeden z najšialanejších ročníkov v histórií Ligy majstrov.</p>
            <img class="ligamajstrov" src="img/strnasty.png" alt="strnasty titul liga majstrov" width="400">
            <p>Štrnásty titul - 2022</p>
            <p>Celkovo vzato má Real Madrid jednu z najimpresívnejších histórií v Lige majstrov UEFA, s celkovým počtom titulov, ktorý sa neustále zvyšuje. Klub sa stal symbolom európskeho futbalu a jeho úspechy v tejto súťaži patria k najvýznamnejším momentom vo svetovom futbale.</p>
        </div>

        <button class="akordeon">Hráči</button>
        <!--najvýznamnejší hráči-->
        <div class="panel">
            <div class="stats">
                <h3>Najvýznamnejší hráči, ktorý obliekli dres Realu Madrid</h3>
                <div class="hracistats">
                    <h2>Cristiano Ronaldo</h2>
                    <img class="hraci2" src="img/ronaldo.jpg" alt="Ronaldo" width="300">
                    <p>Odohrané zápasy: 438</p>
                    <p>Počet gólov: 450</p>
                    <p>Počet asistencií: 120</p>
                    <p>Zlatá lopta: 4</p>
                    <p>Tituly: 5</p>
                </div>
                <div class="hracistats">
                    <h2>Zinedine Zidane</h2>
                    <img class="hraci2" src="img/zidane.jpg" alt="Zidane" width="300">
                    <p>Odohrané zápasy: 224</p>
                    <p>Počet gólov: 49</p>
                    <p>Počet asistencií: 68</p>
                    <p>Tituly: 15</p>
                </div>
                <div class="hracistats">
                <h2>Alfredo Di Stéfano</h2>
                    <img class="hraci2" src="img/distefano.jpg" alt="Di Stefano" width="300">
                    <p>Odohrané zápasy: 356</p>
                    <p>Počet gólov: 271</p>
                    <p>Zlatá lopta: 2</p>
                    <p>Tituly: 15</p>
                </div>
                <div class="hracistats">
                    <h2>Ferenc Puskás</h2>
                    <img class="hraci2" src="img/puskas.jpg" alt="Puskas" width="300">
                    <p>Odohrané zápasy: 231</p>
                    <p>Počet gólov: 202</p>
                    <p>Tituly: 8</p>
                </div>
                <div class="hracistats">
                    <h2>Sergio Ramos</h2>
                    <img class="hraci2" src="img/ramos.jpg" alt="Ramos" width="300">
                    <p>Odohrané zápasy: 671</p>
                    <p>Počet gólov: 101</p>
                    <p>Počet asistencií: 40</p>
                    <p>Tituly: 23</p>
                </div>
                <div class="hracistats">
                    <h2>Raúl González Blanco</h2>
                    <img class="hraci2" src="img/raul.jpg" alt="Raul" width="300">
                    <p>Odohrané zápasy: 741</p>
                    <p>Počet gólov: 323</p>
                    <p>Počet asistencií: 114</p>
                    <p>Zlatá lopta: 4</p>
                    <p>Tituly: 14</p>
                </div>
            </div>
        </div>

        <button class="akordeon">Štadión</button>
        <!--história štadiónu-->
        <div class="panel">
            <h3>Estádio Santiago Bernabéu je štadión Realu Madrid, ktorý tu hráva svoje domáce zápasy. Bol otvorený 14 decembra 1947. Pomenovaný bol podľa legendy klubu Santiaga Bernabeua. Tento štadón patrí medzi najlepšie na svete a má kapacitu približne 80 400 ľudí.</h3>
            <img class="stadium" src="img/stadion1.webp" alt="Prvy stadion" width="600">
            <p>Štadión bol otvorený 14. decembra 1947. Predtým Real Madrid hrával na rôznych iných miestach, ale kvôli rastúcej popularite klubu a potrebe väčšieho priestoru sa rozhodlo postaviť nový štadión.</p>
            <img class="stadium" src="img/1947.jpg" alt=" stadion 1947" width="600">
            <p>Štadión nesie meno Santiago Bernabéu, ktorý bol prezidentom Realu Madrid v rokoch 1943-1978. Bernabéu zohral kľúčovú úlohu pri rozvoji klubu a pri výstavbe nového štadiónu.</p>
            <p>Štadión prešiel mnohými modernizáciami a rozšíreniami v priebehu rokov. Jedným z najdôležitejších bolo to, ktoré sa uskutočnilo pred Majstrovstvami sveta v roku 1982, keď boli nainštalované nové tribúny a zvýšila sa kapacita štadióna.</p>
            <img class="stadium" src="img/1982.jpg" alt=" stadion 1982" width="600">
            <p>Štadión Santiago Bernabéu je považovaný za jedno z majstrovských diel športovej architektúry. Jeho charakteristickým rysom je obrovská strecha, ktorá chráni divákov pred poveternostnými podmienkami.Na území štadióna sa nachádza aj múzeum venované histórii Realu Madrid. Môžete tu vidieť suveníry, trofeje a dozvedieť sa viac o histórii klubu.</p>
            <img class="stadium" src="img/muzeum.avif" alt="muzeum" width="600">
            <p>V posledných rokoch klub oznámil plány významnej renovácie a rozšírenia štadióna, aby ho prispôsobil moderným štandardom. Plány zahŕňajú zvýšenie kapacity, inštaláciu posúvateľnej strechy a vylepšenie infraštruktúry.</p>
            <img class="stadium" src="img/new.jpg" alt="novy stadion" width="600">
            <p>Štadión Santiago Bernabéu zostáva jedným z najdôležitejších symbolov Realu Madrid a miestom, kde fanúšikovia môžu prežívať emócie spojené s futbalom a tešiť sa z bohatej histórie klubu.</p>
        </div>
    </div>
<!--footer-->
    <footer>
        <?php
        $file_path = "parts/footer.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>
    </footer>
    <script src="js/app.js"></script>
    
</body>
</html>