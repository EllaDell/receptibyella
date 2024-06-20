<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/torta_jag.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

    <title>Recepti</title>
</head>
<body>
    <section id="home">
        <nav>
            <div class="logo">
                <img src="image/uspjesna.png">                
            </div>

            <ul>
                <li><a href="user_page.php#home">Početna</a></li>
                <li><a href="user_page.php#about">O meni</a></li>
                <li><a href="user_page.php#ponuda">Ponuda</a></li>
            </ul>

            <div class="icon">
            <i class="bi bi-person-circle" title="Prijavljeni"></i>
            <a href="php/logout.php"><i class="bi bi-box-arrow-left" title="Odjavi se"></i></a>
            </div>
        </nav>

        <div class="main">

            <div class="men_text">
                <h1><span>Torta s jagodama</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/torta_jagoda.webp">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    Za biskvit:<br><br>
6 jaja<br>
180 g šećera<br>
180 g glatkog brašna<br>
1 žličica ekstrakta vanilije<br>
Prstohvat soli<br><br>
Za kremu:<br><br>
500 ml vrhnja za šlag<br>
250 g mascarpone sira<br>
100 g šećera u prahu<br>
1 žličica ekstrakta vanilije<br><br>
Za punjenje i ukrašavanje:<br><br>
500 g svježih jagoda, očišćenih i narezanih na ploške<br>
2 žlice šećera<br>
1 žlica limunovog soka<br>
Šećer u prahu za posipanje<br>
Priprema:<br><br>
Priprema biskvita:

Zagrijte pećnicu na 180°C. Obložite dno dvije okrugle kalupe (promjera 20-22 cm) papirom za pečenje, a rubove lagano namastite i pobrašnite.
U velikoj zdjeli, mikserom na visokoj brzini, istucite jaja, šećer, ekstrakt vanilije i prstohvat soli dok smjesa ne postane svijetla, pjenasta i udvostruči svoj volumen (oko 5-7 minuta).
Postupno dodajte brašno, lagano miješajući špatulom dok se sve dobro ne sjedini.
Podijelite smjesu na dva jednaka dijela i izlijte u pripremljene kalupe.
Pecite biskvite u prethodno zagrijanoj pećnici 20-25 minuta, ili dok ne postanu lagano zlatno smeđi i elastični na dodir.
Izvadite iz pećnice i ostavite da se potpuno ohlade prije nego što ih izvadite iz kalupa.
<br><br>
U zdjeli, mikserom na srednjoj brzini, istucite vrhnje za šlag, šećer u prahu i ekstrakt vanilije dok ne dobijete čvrsti šlag.
Dodajte mascarpone sir i nježno miješajte dok se sve dobro ne sjedini i dobijete glatku kremu.
<br><br>
U zdjeli pomiješajte narezane jagode sa šećerom i limunovim sokom. Ostavite da odstoji nekoliko minuta kako bi pustile sok.
<br><br>
Stavite prvi biskvit na tanjur za posluživanje.
Rasporedite polovicu kreme ravnomjerno po biskvitu.
Posložite polovicu pripremljenih jagoda preko kreme.
Stavite drugi biskvit preko jagoda.
Preostalu kremu rasporedite po vrhu drugog biskvita.
Ukrasite tortu preostalim jagodama.
<br><br>
Prije posluživanja, posipajte tortu šećerom u prahu.
Tortu stavite u hladnjak najmanje 1 sat prije posluživanja kako bi se kreme stegnule i okusi proželi.<br><br>
Ova torta s jagodama je idealna za posebne prigode ili kao osvježavajući desert za ljubitelje jagoda. Uživajte u njoj!
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>