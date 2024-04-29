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
    <section class="slides-container">
        <?php
        generateSlides("img/banners");
        ?>
        
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
                <img class="hraci" src="img/hraci/COURTOIS.webp" alt="Courtois">
                <h4>THIBAUT COURTOIS</h4>
                <h5>#1</h5>
            </div>

            <div class="box">
                <img class="hraci" src="img/hraci/LUNIN.webp" alt="Lunin">
                <h4>ANDRIY LUNIN</h4>
                <h5>#13</h5>
            </div>

            <div class="box">
                <img class="hraci" src="img/hraci/KEPA.webp" alt="Kepa">
                <h4>KEPA ARRIZABALAGA</h4>
                <h5>#25</h5>
            </div>
            <!--obrancovia-->
            <div class="center">
                <p>OBRANCOVIA</p>
            </div>
        
            <div class="box">
                <img class="hraci" src="img/hraci/ALABA.webp" alt="Alaba">
                <h4>DAVID ALABA</h4>
                <h5>#4</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/CARVAJAL.webp" alt="Carvajal">
                <h4>DANI CARVAJAL</h4>
                <h5>#2</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/MENDY.webp" alt="Mendy">
                <h4>FERLAND MENDY</h4>
                <h5>#23</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/MILITAO.webp" alt="Militao">
                <h4>ÉDER MILITÃO</h4>
                <h5>#3</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/RUDIGER.webp" alt="Rudiger">
                <h4>ANTONIO RUDIGER</h4>
                <h5>#22</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/FRAN.webp" alt="Fran">
                <h4>FRAN GARCÍA</h4>
                <h5>#20</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/LUCAS.webp" alt="Lucas">
                <h4>LUCAS VÁZQUEZ</h4>
                <h5>#17</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/NACHO.webp" alt="Nacho">
                <h4>NACHO</h4>
                <h5>#6</h5>
            </div>
            <!--stredopoliari-->
            <div class="center">
                <p>STREDOPOLIARI</p>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/BELLINGHAM.webp" alt="Bellingham">
                <h4>JUDE BELLINGHAM</h4>
                <h5>#5</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/MODRIC.webp" alt="Modric">
                <h4>LUKA MODRIĆ</h4>
                <h5>#10</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/KROOS.webp" alt="Kroos">
                <h4>TONI KROOS</h4>
                <h5>#8</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/TCHOUAMENI.webp" alt="Tchouameni">
                <h4>AURELIEN TCHOUAMENI</h4>
                <h5>#18</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/VALVERDE.webp" alt="Valverde">
                <h4>FEDE VALVERDE</h4>
                <h5>#15</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/ARDA.webp" alt="Arda Guler">
                <h4>ARDA GULER</h4>
                <h5>#24</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/CAMAVINGA.webp" alt="Camavinga">
                <h4>EDUARDO CAMAVINGA</h4>
                <h5>#12</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/CEBALLOS.webp" alt="Ceballos">
                <h4>DANI CEBALLOS</h4>
                <h5>#19</h5>
            </div>
            <!--útočníci-->
            <div class="center">
                    <p>ÚTOČNÍCI</p>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/VINI.webp" alt="Vini Jr">
                <h4>VINICIUS JUNIOR</h4>
                <h5>#7</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/RODRYGO.webp" alt="Rodrygo">
                <h4>RODRYGO GOES</h4>
                <h5>#11</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/JOSELU.webp" alt="Joselu">
                <h4>JOSELU</h4>
                <h5>#14</h5>
            </div>
            <div class="box">
                <img class="hraci" src="img/hraci/BRAHIM.webp" alt="Brahim Dzaz">
                <h4>BRAHIM DIAZ</h4>
                <h5>#21</h5>
            </div>

            <div class="center">
                <p>TRÉNER</p>
            </div>
            <div class="trener1">
                <img class="trener" src="img/hraci/ancelotti.webp" alt="Ancelotti">
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