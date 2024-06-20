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
                <h1><span>Raspucanci</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/raspucanci.jpg">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    200 g tamne čokolade (70% kakaa), nasjeckane <br>
60 g maslaca <br>
100 g šećera <br>
2 velika jaja <br>
1 žličica ekstrakta vanilije <br>
190 g glatkog brašna <br>
1/2 žličice praška za pecivo <br>
Prstohvat soli <br>
60 g šećera u prahu (za valjanje) <br><br>
Priprema: <br> <br>

U loncu na laganoj vatri, ili u mikrovalnoj pećnici u intervalima od 20 sekundi, otopite nasjeckanu čokoladu i maslac, miješajući dok smjesa ne postane glatka.
Ostavite da se malo ohladi. <br> <br>

U velikoj zdjeli, mikserom na srednjoj brzini, istucite jaja i šećer dok ne postanu blijedi i pjenasti (oko 2-3 minute).
Dodajte ekstrakt vanilije i rastopljenu čokoladu s maslacem, pa dobro promiješajte. <br> <br>

U drugoj zdjeli, pomiješajte brašno, prašak za pecivo i prstohvat soli.
Postupno dodajte suhe sastojke u smjesu s čokoladom, miješajući dok se sve dobro ne sjedini. <br> <br>

Pokrijte zdjelu plastičnom folijom i stavite u hladnjak na najmanje 2 sata, ili dok smjesa ne postane dovoljno čvrsta za oblikovanje kuglica.

Zagrijte pećnicu na 180°C i obložite lim za pečenje papirom za pečenje.
Uzmite ohlađenu smjesu iz hladnjaka i oblikujte kuglice veličine oraha (oko 2,5 cm promjera).
Svaku kuglicu obilno uvaljajte u šećer u prahu dok se potpuno ne prekrije. <br> <br> 

Stavite kuglice na pripremljeni lim za pečenje, ostavljajući razmak između svake kuglice.
Pecite u prethodno zagrijanoj pećnici 10-12 minuta, ili dok se raspucanci ne napuhnu i površina ne postane raspucana.
Izvadite iz pećnice i ostavite da se ohlade na limu nekoliko minuta, zatim ih premjestite na rešetku da se potpuno ohlade. <br><br><br>
Uživajte u svojim domaćim čokoladnim raspucancima!
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>