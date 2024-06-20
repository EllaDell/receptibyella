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
    <link rel="stylesheet" href="test.css">
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
                <h1><span>Rolada s jagodama</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/rolada_jagoda.jpg">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    Za biskvit: <br><br>
4 jaja <br>
120 g šećera <br>
1 žličica ekstrakta vanilije<br>
120 g glatkog brašna<br>
Prstohvat soli<br><br>
Za punjenje:<br><br>
250 g svježih jagoda, očišćenih i narezanih na tanke ploške<br>
250 ml vrhnja za šlag<br>
50 g šećera u prahu<br>
1 žličica ekstrakta vanilije<br><br>
Priprema:<br><br>
Priprema biskvita:<br><br>

Zagrijte pećnicu na 180°C. Obložite veliki lim za pečenje papirom za pečenje.
U velikoj zdjeli, mikserom na visokoj brzini, istucite jaja, šećer i ekstrakt vanilije dok smjesa ne postane blijeda, pjenasta i udvostruči svoj volumen (oko 5-7 minuta).
Postupno dodajte brašno i sol, lagano miješajući špatulom dok se sve dobro ne sjedini.
Izlijte smjesu na pripremljeni lim za pečenje i ravnomjerno je rasporedite.<br><br>
Pečenje biskvita:<br><br>

Pecite biskvit u prethodno zagrijanoj pećnici 12-15 minuta, ili dok ne postane lagano zlatno smeđi i elastičan na dodir.<br><br>
Priprema punjenja:<br><br>

U velikoj zdjeli, mikserom na srednjoj brzini, istucite vrhnje za šlag, šećer u prahu i ekstrakt vanilije dok ne dobijete čvrsti šlag.
Nježno umiješajte narezane jagode u šlag.<br><br>
Sklapanje rolade:<br><br>

Odmah nakon pečenja, prekrijte biskvit čistom krpom lagano navlaženom vodom i ostavite da se ohladi nekoliko minuta.
Pažljivo skinite papir za pečenje s ohlađenog biskvita.
Ravnomjerno rasporedite pripremljeno punjenje od jagoda i šlaga po cijeloj površini biskvita.<br><br>
Savijanje rolade:<br><br>

Pažljivo zarolajte biskvit s punjenjem, počevši od kraćeg ruba, pomoću krpe koja će vam pomoći da rolada bude čvrsta i da se ne raspada.
Prebacite roladu na tanjur za posluživanje, premažite dodatnim šlagom ili jagodama po želji.<br><br>
Hlađenje i posluživanje:<br><br>

Stavite roladu u hladnjak najmanje 1 sat prije posluživanja kako bi se punjenje stegnulo i rolada se ohladila.
Prije posluživanja, pospite roladu šećerom u prahu i ukrasite svježim jagodama.<br><br><br>
Uživajte u osvježavajućoj roladi s jagodama!
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>