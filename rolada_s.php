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
    <link rel="stylesheet" href="css/rolada_s.css">
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
                <h1><span>Šarena rolada</span></h1>
            </div>

            <div class="muffini2">
                <img src="image/slatko/rolada.jpg">
            </div>

        </div>

<p> <br> <br> <br> <br>
    Sastojci: <br> <br>
    Za žuti biskvit: <br> <br>
4 jaja <br>
120 g šećera <br>
1 žličica ekstrakta vanilije <br>
120 g glatkog brašna <br>
1 žličica praška za pecivo <br><br>
Za smeđi biskvit: <br><br>
4 jaja <br>
120 g šećera <br>
1 žličica ekstrakta vanilije <br>
100 g glatkog brašna <br>
20 g kakao praha <br>
1 žličica praška za pecivo <br> <br>
Za kremu: <br> <br>
250 ml vrhnja za šlag <br>
250 g mascarpone sira <br>
100 g šećera u prahu<br>
1 žličica ekstrakta vanilije<br><br>
Priprema:<br><br>
Zagrijte pećnicu na 180°C.
U zdjeli miksajte jaja i šećer dok ne postanu blijeda i pjenasta (oko 5 minuta).
Dodajte ekstrakt vanilije i kratko izmiješajte.
Prosijte brašno i prašak za pecivo, pa pažljivo umiješajte u smjesu jaja dok ne dobijete glatku smjesu.
Izlijte smjesu u veliki lim obložen papirom za pečenje, ravnomjerno je rasporedite.
Pecite 10-12 minuta, dok biskvit ne postane lagano zlatno smeđi i elastičan na dodir.
Izvadite iz pećnice, pažljivo preokrenite na čistu krpu posutu šećerom u prahu i skinite papir za pečenje. Zamotajte biskvit s krpom u roladu i ostavite da se hladi.
<br><br>
Ponovite isti postupak kao za žuti biskvit, s time da u brašno dodate kakao prah.
Izlijte smjesu u drugi lim obložen papirom za pečenje i pecite kao i žuti biskvit.
Izvadite iz pećnice, preokrenite na čistu krpu posutu šećerom u prahu, skinite papir za pečenje i zamotajte u roladu s krpom. Ostavite da se hladi.
<br><br>
U zdjeli, mikserom na srednjoj brzini, istucite vrhnje za šlag dok ne dobijete čvrsti šlag.
U drugoj zdjeli izmiksajte mascarpone, šećer u prahu i ekstrakt vanilije dok ne postanu glatki.
Pažljivo umiješajte tučeno vrhnje u smjesu mascarponea dok ne dobijete jednoličnu kremu.
<br><br>
Pažljivo odmotajte oba biskvita.
Ravnomjerno rasporedite polovicu kreme na žuti biskvit i zarolajte ga bez krpe.
Ravnomjerno rasporedite preostalu kremu na smeđi biskvit i pažljivo stavite već zarolani žuti biskvit na početak smeđeg biskvita. Zarolajte zajedno tako da smeđi biskvit obavije žuti.
Omotajte gotovu roladu plastičnom folijom i stavite je u hladnjak na najmanje 2 sata (ili preko noći) kako bi se stegnula i okusi proželi.
<br><br>
Prije posluživanja, roladu možete posuti šećerom u prahu ili ukrasiti otopljenom čokoladom.
Narežite na kriške i uživajte!<br><br>
Uživajte u svojoj šarenoj roladi!
</p> <br> <br> 
<p class="dt">Dobar tek!</p>
</section>
</body>
</html>