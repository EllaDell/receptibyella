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
    <link rel="stylesheet" href="css/mousse.css">
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
                <h1><span>Mousse od banane</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/mousse_banana.jpg">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    3 zrele banane <br>
2 žlice limunovog soka <br>
100 g šećera u prahu <br>
1 žličica ekstrakta vanilije <br>
300 ml vrhnja za šlag (hladno) <br>
Prstohvat soli <br>  <br>
Priprema: <br> <br>

Ogulite banane i stavite ih u blender ili procesor za hranu.
Dodajte limunov sok i miksajte dok ne dobijete glatku smjesu.
U velikoj zdjeli mikserom na srednjoj brzini istucite vrhnje za šlag, šećer u prahu, ekstrakt vanilije i prstohvat soli dok ne dobijete čvrsti šlag.
Lagano umiješajte smjesu od banana u tučeni šlag koristeći silikonsku špatulu. Miješajte pažljivo dok se sve dobro ne sjedini, pazeći da ne izgubite volumen.
Rasporedite mousse u desertne čaše ili zdjelice.
Stavite ih u hladnjak najmanje 2 sata, ili dok mousse ne postane čvrst i dobro ohlađen.
Prije posluživanja, mousse možete ukrasiti šlagom, kriškama banane, ribanom čokoladom ili orasima po želji. <br><br>
Uživajte u svojem domaćem mousseu od banane!
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>