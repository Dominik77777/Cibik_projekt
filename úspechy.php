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
    <!--navigácia-->
    <header>
        <?php
        $file_path = "parts/nav.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>
        </nav>
    </header>
    <!--úspechy-->
    <div class="uspechy">
        <h3>ÚSPECHY</h3>
        <img class="titul" src="img/tituly/titul1.jpg" alt="laliga">
        <h2>LA LIGA</h2>
        <h2>35x</h2>
        <p>1931–32, 1932–33, 1953–54, 1954–55, 1956–57, 1957–58, 1960–61, 1961–62, 1962–63, 1963–64, 1964–65, 1966–67, 1967–68, 1968–69, 1971–72, 1974–75, 1975–76, 1977–78, 1978–79, 1979–80, 1985–86, 1986–87, 1987–88, 1988–89, 1989–90, 1994–95, 1996–97, 2000–01, 2002–03, 2006–07, 2007–08, 2011–12, 2016–17, 2019-20, 2021-22</p>
        
        <img class="titul" src="img/tituly/titul2.jpg" alt="liga majstrov">
        <h2>LIGA MAJSTROV</h2>
        <h2>14x</h2>
        <p>1955-56,  1956-57,  1957-58,  1958-59,  1959-60,  1965-66,  1997-98, 1999-00,  2001-02,  2013-14,  2015-16,  2016-17,  2017-18, 2021-22</p>

        <img class="titul" src="img/tituly/titul3.jpg" alt="copa del rey">
        <h2>COPA DEL REY</h2>
        <h2>20x</h2>
        <p>1905, 1906, 1907, 1908, 1917, 1934, 1936, 1946, 1947, 1961–62, 1969–70, 1973–74, 1974–75, 1979–80, 1981–82, 1988–89, 1992–93, 2010–11, 2013–14</p>
        
        <img class="titul" src="img/tituly/titul4.jpg" alt="supercopa de espana">
        <h2>SUPERCOPA dE ESPAÑA</h2>
        <h2>12x</h2>
        <p>1988, 1989, 1990, 1993, 1997, 2001, 2003, 2008, 2012, 2017, 2019–20, 2021-22</p>

        <img class="titul" src="img/tituly/titul5.jpg" alt="majstrovstva sveta klubov">
        <h2>MAJSTROVSTVÁ SVETA KLUBOV</h2>
        <h2>8x</h2>
        <p>1960, 1998, 2002, 2014, 2016, 2017, 2018, 2022</p>

        <img class="titul" src="img/tituly/titul6.jpg" alt="europsky superpohar">
        <h2>EURÓPSKY SUPERPOHÁR</h2>
        <h2>5x</h2>
        <p>2002,  2014,  2016,  2017, 2022</p>

        <img class="titul" src="img/tituly/titul7.jpg" alt="pohar uefa">
        <h2>POHÁR UEFA</h2>
        <h2>2x</h2>
        <p>1984-85, 1985-86</p>

        <img class="titul" src="img/tituly/titul8.jpg" alt="ligovy pohar">
        <h2>LIGOVÝ POHÁR</h2>
        <h2>1x</h2>
        <p>1984-85</p>

        <img class="titul" src="img/tituly/titul9.jpg" alt="male majstrovstva sveta">
        <h2>MALÉ MAJSTROVSTVÁ SVETA</h2>
        <h2>2x</h2>
        <p>1952, 1956</p>

        <img class="titul" src="img/tituly/titul10.jpg" alt="latinsky pohar">
        <h2>LATINSKÝ POHÁR</h2>
        <h2>2x</h2>
        <p>1955, 1957</p>

        <img class="titul" src="img/tituly/titul11.jpg" alt="regionalne majstrovstva">
        <h2>REGIONÁLNE MAJSTROVSTVÁ</h2>
        <h2>18x</h2>
        <p>1903-04, 1904-05, 1905-06, 1906-07, 1907-08, 1912-13, 1915-16, 1916-17, 1917-18, 1919-20, 1921-22, 1922-23, 1923-24, 1925-26, 1926-27, 1928-29, 1929-30, 1930-31</p>

        <img class="titul" src="img/tituly/titul12.jpg" alt="trofek mancomunados">
        <h2>TROFEJ MANCOMUNADOS</h2>
        <h2>5x</h2>
        <p>1931-32, 1932-33, 1933-34, 1934-35, 1935-36</p>
        

        <img class="titul" src="img/tituly/titul13.jpg" alt="najlepsi klub 20. storocia">
        <h2>NAJLEPŠÍ KLUB 20. STOROČIA</h2>
        <h2>1x</h2>
        <p>2000</p>
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