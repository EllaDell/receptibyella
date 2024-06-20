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
    <link rel="stylesheet" href="css/coko_muffin.css">
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
                <h1><span>Chokoladni muffini</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/coko_muffin.jpg">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    285 g brašna <br>
15 g kakaa (2 žlice) <br>
200 g šećera <br>
Vanilin šećer <br>
Prašak za pecivo <br>
4 jaja <br>
2,5 dl ulja <br>
2,5 dl mlijeka <br>
Cimet (po želji) <br>
<br><br><br><br>
U jednu posudu staviti brašno, šećer, vanilin šećer, prašak za pecivo, kakao i po želji cimet. Osim cimeta možete staviti bilo koji začin koji volite, arome i okuse po želji.
Dodajte komadiće čokolade ili lješnjaka, badema, oraha i izmiješajte.
U drugoj posudi jaja dobro izmutite mikserom.
U jaja dodajte ulje i mlijeko te izmiješajte. 
U smjesu jaja polako dodajte suhe sastojke (kroz cjediljku) i izmiješajte pjenjačom ili drvenom žlicom. 
Žlicom za sladoled možete stavljati smjesu u papirnate ili silikonske košarice. Tako se napravi najmanje nereda, a smjesa se lako izlije iz žlice. 
Pecite 20 minuta na 200 °C.
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>