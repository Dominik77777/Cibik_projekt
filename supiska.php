<!DOCTYPE html>
<html lang="sk">
<head>
    <?php
    $file_path = "parts/header.php";
    if(!include($file_path)) {
        echo"Failed to include $file_path";
    }
    ?>
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
    <section class="slides-container">
        <div class="slide fade">
          <img src="img/banner1.png">
        </div>
        
        <div class="slide fade">
          <img src="img/banner2.png">
        </div>

        <div class="slide fade">
            <img src="img/banner3.png">
          </div>
        
        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
        
      </section>
    <!--súpiska hráčov-->
    <section class="team">
        <h3>SÚPISKA</h3>
        <!--brankári-->
        <div class="center">
            <p>BRANKÁRI</p>
        </div>
        <div class="team-content">
            <div class="box">
                <img class="hraci" src="img/COURTOIS.webp" alt="Courtois">
                <h4>THIBAUT COURTOIS</h4>
                <h5>#1</h5>
            </div>

            <div class="box">
                <img class="hraci" src="img/LUNIN.webp" alt="Lunin">
                <h4>ANDRIY LUNIN</h4>
                <h5>#13</h5>
            </div>

            <div class="box">
                <img class="hraci" src="img/KEPA.webp" alt="Kepa">
                <h4>KEPA ARRIZABALAGA</h4>
                <h5>#25</h5>
            </div>
            <!--obrancovia-->
            <div class="center">
                <p>OBRANCOVIA</p>
            </div>
        
            <div class="box">
                <img class="hraci" src="img/ALABA.webp" alt="Alaba">
                <h4>DAVID ALABA</h4>
                <h5>#4</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/CARVAJAL.webp" alt="Carvajal">
                <h4>DANI CARVAJAL</h4>
                <h5>#2</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/MENDY.webp" alt="Mendy">
                <h4>FERLAND MENDY</h4>
                <h5>#23</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/MILITAO.webp" alt="Militao">
                <h4>ÉDER MILITÃO</h4>
                <h5>#3</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/RUDIGER.webp" alt="Rudiger">
                <h4>ANTONIO RUDIGER</h4>
                <h5>#22</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/FRAN.webp" alt="Fran">
                <h4>FRAN GARCÍA</h4>
                <h5>#20</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/LUCAS.webp" alt="Lucas">
                <h4>LUCAS VÁZQUEZ</h4>
                <h5>#17</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/NACHO.webp" alt="Nacho">
                <h4>NACHO</h4>
                <h5>#6</h5>
            </div>
            <!--stredopoliari-->
            <div class="center">
                <p>STREDOPOLIARI</p>
            </div>
            <div class="box">
                <img class="hraci" src="img/BELLINGHAM.webp" alt="Bellingham">
                <h4>JUDE BELLINGHAM</h4>
                <h5>#5</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/MODRIC.webp" alt="Modric">
                <h4>LUKA MODRIĆ</h4>
                <h5>#10</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/KROOS.webp" alt="Kroos">
                <h4>TONI KROOS</h4>
                <h5>#8</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/TCHOUAMENI.webp" alt="Tchouameni">
                <h4>AURELIEN TCHOUAMENI</h4>
                <h5>#18</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/VALVERDE.webp" alt="Valverde">
                <h4>FEDE VALVERDE</h4>
                <h5>#15</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/ARDA.webp" alt="Arda Guler">
                <h4>ARDA GULER</h4>
                <h5>#24</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/CAMAVINGA.webp" alt="Camavinga">
                <h4>EDUARDO CAMAVINGA</h4>
                <h5>#12</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/CEBALLOS.webp" alt="Ceballos">
                <h4>DANI CEBALLOS</h4>
                <h5>#19</h5>
            </div>
            <!--útočníci-->
            <div class="center">
                    <p>ÚTOČNÍCI</p>
            </div>
            <div class="box">
                <img class="hraci" src="img/VINI.webp" alt="Vini Jr">
                <h4>VINICIUS JUNIOR</h4>
                <h5>#7</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/RODRYGO.webp" alt="Rodrygo">
                <h4>RODRYGO GOES</h4>
                <h5>#11</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/JOSELU.webp" alt="Joselu">
                <h4>JOSELU</h4>
                <h5>#14</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/BRAHIM.webp" alt="Brahim Dzaz">
                <h4>BRAHIM DIAZ</h4>
                <h5>#21</h5>
            </div>

            <div class="center">
                <p>TRÉNER</p>
            </div>
            <div class="trener1">
                <img class="trener" src="img/ancelotti.webp" alt="Ancelotti">
                <h4>CARLO ANCELOTTI</h4>
                <h5>Hlavný tréner</h5>
            </div>
        </div>
    </section>
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