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
    <link rel="stylesheet" href="css/coko_keksi.css">
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
                <h1><span>Choco keksi</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/čoko_keksi.webp">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    150 g maslaca, sobne temperature<br>
    150 g smeđeg šećera<br>
    100 g bijelog šećera<br>
    1 veliko jaje<br>
    1 žličica ekstrakta vanilije<br>
    250 g glatkog brašna<br>
    50 g kakao praha<br>
    1 žličica sode bikarbone<br>
    1/4 žličice soli<br>
    200 g čokoladnih kapljica ili nasjeckane tamne čokolade<br><br>
    Priprema:<br><br>    
    Zagrijte pećnicu na 180°C. Obložite lim za pečenje papirom za pečenje.
    U velikoj zdjeli, mikserom ili ručno, umutite maslac, smeđi šećer i bijeli šećer dok smjesa ne postane lagana i pjenasta.
    Dodajte jaje i ekstrakt vanilije, pa miksajte dok se sve dobro ne sjedini.
    <br><br>    
    U drugoj zdjeli prosijte brašno, kakao prah, sodu bikarbonu i sol.
    Postupno dodajte suhe sastojke u smjesu s maslacem i jajetom, miješajući dok se sve dobro ne sjedini.
    Umiješajte čokoladne kapljice ili nasjeckanu čokoladu dok se ravnomjerno ne rasporede po tijestu.
    <br><br>    
    Žlicom za sladoled ili žlicom oblikujte male hrpice tijesta (veličine oraha) i rasporedite ih na pripremljeni lim za pečenje, ostavljajući dovoljan razmak između keksića jer će se malo raširiti tijekom pečenja.
    <br><br>    
    Pecite kekse u prethodno zagrijanoj pećnici 10-12 minuta, ili dok rubovi keksa ne postanu čvrsti, a sredina se čini blago mekom.
    Izvadite kekse iz pećnice i ostavite ih da se ohlade nekoliko minuta na limu za pečenje, a zatim ih premjestite na rešetku da se potpuno ohlade.
    <br><br>    
    Čokoladne kekse možete poslužiti tople ili ohlađene uz čašu mlijeka ili šalicu kave.<br><br>
    Ovaj recept će vam dati hrskave vanilin kekse s bogatim okusom čokolade koji su savršeni za uživanje u bilo koje doba dana!
</p> <br> <br> <br>
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>