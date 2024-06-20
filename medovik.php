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
    <link rel="stylesheet" href="css/medovik.css">
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
                <h1><span>Medovik</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/medovik.jpg">
            </div>

        </div>

<p> <br> <br> <br> 
    Sastojci: <br> <br>
    Za tijesto: <br> <br>
150 g maslaca <br>
150 g šećera <br>
3 žlice meda <br>
3 jaja <br>
1 žličica sode bikarbone <br>
450-500 g brašna <br> <br>
Za kremu:  <br> <br>
800 ml kiselog vrhnja (20% masti) <br>
200 g šećera u prahu <br>
1 žličica ekstrakta vanilije <br> <br>
Priprema: <br><br>
U loncu, na srednjoj vatri, otopite maslac, šećer i med, miješajući dok se šećer potpuno ne otopi i smjesa ne postane glatka.
Maknite lonac s vatre i dodajte sodu bikarbonu, brzo miješajući. Smjesa će se zapjeniti i posvijetliti.
Ostavite smjesu da se malo ohladi, zatim umiješajte jaja jedno po jedno, brzo miješajući da se ne skuhaju.
Postupno dodajte brašno i miješajte dok ne dobijete mekano, ali ne ljepljivo tijesto. Možda ćete trebati dodati više ili manje brašna, ovisno o konzistenciji tijesta.
Podijelite tijesto na 8-10 jednakih dijelova i oblikujte kuglice. Pokrijte ih plastičnom folijom i ostavite da odstoje u hladnjaku 30 minuta.
<br><br>
Zagrijte pećnicu na 180°C.
Razvaljajte svaku kuglicu tijesta na lagano pobrašnjenoj površini u krugove promjera 20-22 cm. Koristite tanjur ili kalup kao šablonu za rezanje savršenih krugova.
Pecite svaki krug na papiru za pečenje ili silikonskoj podlozi 5-7 minuta, dok ne postanu zlatno smeđi.
Ostavite kore da se ohlade. Ostatke tijesta možete ispeći i samljeti u mrvice za ukrašavanje torte.
<br><br>
U zdjeli, mikserom na srednjoj brzini, izmiksajte kiselo vrhnje, šećer u prahu i ekstrakt vanilije dok ne postane glatko i kremasto.
<br><br>
Postavite prvu koru na tanjur za posluživanje i obilno je premažite kremom.
Ponovite postupak sa svim korama, završavajući s kremom na vrhu i sa strana torte.
Pospite mljevenim mrvicama od ostataka tijesta po vrhu i stranama torte.
<br><br>
Tortu stavite u hladnjak najmanje 8 sati, a najbolje preko noći, kako bi kore omekšale i upile kremu.
Prije posluživanja, tortu možete ukrasiti dodatnim mrvicama, orasima ili voćem po želji.
<br><br><br>
Uživajte u svojoj domaćoj Medovik torti!
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>