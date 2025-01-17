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
    <link rel="stylesheet" href="css/style.css">
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

        <!--home-->
        <div class="main">

            <div class="men_text">
                <h1>Kolači koji osvajaju<br><span>SRCE</span></h1>
            </div>

            <div class="main_image">
                <img src="image/slika-pocetna.png">
            </div>

        </div>

        <p>
            Dobrodošli na moju stranicu posvećenu umjetnosti pečenja i stvaranja slatkih remek-djela. 
            Ovdje ćete pronaći raznolike recepte za kolače, kekse, torte i mnoge druge slastice koje će zadovoljiti svaki ukus i prigodu. 
            Bilo da ste iskusni pekar ili tek započinjete svoju slatku avanturu, moji detaljni i lako pratljivi recepti pomoći će Vam da svaki put postignete savršen rezultat.
            Moja kolekcija obuhvaća sve, od klasičnih recepata koje svi volimo, do modernih interpretacija koje će impresionirati Vaše goste. 
            Svaki recept je pažljivo testiran i osmišljen da Vam donese radost i zadovoljstvo pri svakom zalogaju.
            Pridružite nam se u ovoj slatkoj priči, istražite moje recepte i pronađite inspiraciju za svoj sljedeći desert. 
            Jer ovdje, u svijetu kolača koji osvajaju srce, svaki dan je sladak povod za slavlje!
        </p>


    </section>


<!--O MENI-->

<div class="about" id="about">
    <div class="about_main">

        <div class="image">
            <img src="image/tanjur.png">
        </div>

        <div class="about_text">
            <h1>O<span>meni</span></h1>
            <h3>Zašto izabrati moje recepte?</h3>
            <p>
                Ako tražite savršene recepte za torte, 
                kolače, kekse i još mnogo toga, na pravom ste mjestu. 
                Moja stranica posvećena je stvaranju neodoljivih 
                poslastica koje će vas oduševiti svojim okusom i izgledom.
                Što me izdvaja od drugih? Pa, moja strast prema slatkim kreacijama je neprocjenjiva. 
                Svaki recept koji s vama dijelim pažljivo je odabran, testiran i prilagođen 
                kako bi pružio savršen spoj okusa i tekstura. 
                Savršenstvo slatkog svijeta leži u svakom receptu koji nudim. Moja stranica ne 
                samo da vam donosi recepte, već i 
                inspirira vas da uživate u procesu stvaranja jedinstvenih delicija. 
                Uvijek sam tu da Vas podržim i savjetuje kako biste postigli najbolje 
                rezultate u svojoj kuhinji. 
                Uživajte u čaroliji okusa koju stvaramo zajedno!
                Ukusno, jednostavno, raznovrsno! 
            </p>
        </div>

    </div>
</div>



<!--Menu-->

<div class="menu" id="ponuda">
    <h1><span>Ponuda</span></h1>

    <div class="menu_box">
        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/muffini2.jpg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('odvojeno/s_muffini.php')">Šareni muffini</h2>
                <p>
                    Šareni muffini su veseli i ukusni kolačići, idealni za svaku prigodu. Njihova sočna unutrašnjost i živopisne boje sigurno će razveseliti i odrasle i djecu.
                </p>                
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>
        
        
        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/cheesecake.webp">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('cheesecake.html')">Cheesecake</h2>
                <p>
                    Cheesecake je kremasti desert sa bogatom bazom od krem sira, preliven voćnim sirupom. 
                    Savršeno balansira između blago slatkog i osvežavajuće kiselkastog ukusa, što ga čini idealnim izborom za svaku priliku.
                </p>                        
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>
        

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/homemade_čoko.jpeg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('h_coko.html')">Homemade čokolada</h2>
                <p>
                    Domaća čokolada je prava poslastica za sve ljubitelje slatkog. 
                    Priprema se od najfinijih sastojaka, pružajući bogat, kremast okus koji nadmašuje bilo koju komercijalnu verziju.                
                </p>       
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/macarons.jpg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('macarons.html')">Macarons</h2>
                <p>
                    Macarons su delikatni francuski kolačići izrađeni od bademovog brašna, šećera i bjelanjaka, 
                    ispunjeni raznovrsnim kremastim nadjevima. 
                    Njihova hrskava vanjska korica i mekana unutrašnjost čine 
                    ih savršenim slatkim zalogajem za svaku prigodu.
                </p>
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/medovik.jpg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('medovik.php')">Medovik</h2>
                <p>
                    Ruski Medovik je slojevita torta s bogatim okusom meda, sastavljena od tankih 
                    kora i kremastog punjenja. Ovaj tradicionalni desert, 
                    omiljen zbog svoje nježne teksture i balansiranog slatko-kiselog okusa, pravi je užitak za svako nepce.
                </p>
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/muffini.jpeg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('coko_muffin.php')">Čokoladni muffini</h2>
                <p>
                    Muffini su mekani, sočni 
                    kolačići, savršeni za brzi doručak ili 
                    popodnevnu poslasticu. Raznovrsni su i jednostavni za pripremu, 
                    pružajući širok spektar okusa koji će zadovoljiti svaku nepcnu želju.
                </p>                         
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/muss_banana.jpeg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('mousse.php')">Mousse od banane</h2>
                <p>
                    Mousse od banane je svilenkasta poslastica koja kombinira bogati kremasti okus banane s laganim, pjenastim teksturom. 
                    Savršeno se slaže s dodatkom čokoladnih komadića ili orašastih plodova za dodatni sloj ukusa i teksture.
                </p>
            </div>

        </div>
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script> 

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/raspucanci.jpg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('raspuc.php')">Raspucanci</h2>
                <p>
                    Raspucanci su hrskavi kolačići s mekanim središtem, obično punjeni čokoladnim ili voćnim komadićima. 
                    Njihova jednostavna priprema i neodoljiv ukus čine ih omiljenim izborom za brzi desert ili popodnevnu poslasticu uz kavu.
                </p>
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/rolada.jpeg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('rolada_s.php')">Šarena rolada</h2>
                <p>
                    Šarena rolada je osvježavajući desert koji očarava svojom raznolikošću boja i okusa. 
                    Sastoji se od mekane i prozračne biskvitne rolade punjene svježim voćem, kremama ili čokoladom, stvarajući šarmantan vizualni i gastronomski doživljaj.
                </p>
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/rolada_jagoda.jpg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('jagoda_r.php')">Rolada s jagodama</h2>
                <p>
                    Rolada od jagoda je osvježavajući desert koji oduševljava svojom delikatnom kombinacijom mekanog biskvita i svježih, sočnih jagoda. 
                    Ovaj slatki užitak pruža savršenu ravnotežu slatkog i kiselkastog okusa, idealan je izbor za ljetne dane ili posebne prigode.
                </p>
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/torta_jagoda.jpeg">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('torta_jag.php')">Torta s jagodama</h2>
                <p>
                    Torta od jagoda je neodoljiva poslastica koja spaja hrskavu koru, kremasti punjenje i svježe jagode, stvarajući savršenu harmoniju okusa i tekstura. 
                    Ova slatka delicija predstavlja idealan spoj slatkog i osvježavajućeg, čineći je omiljenim desertom za sve ljubitelje voćnih poslastica.
                </p>
            </div>

        </div>
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script> 

        <div class="menu_card">

            <div class="menu_image">
                <img src="image/slatko/čoko_keksi.webp">
            </div>

            <div class="small_card">
                <a href="#login" onclick="handleClick()">
                <i class="fa-solid fa-heart"></i></a>
            </div>

            <div class="menu_info">
                <h2 onclick="redirectToPage('coko_keksi.php')">Čokoladni keksi</h2>
                <p>
                    Čokoladni keksi su neodoljiva poslastica koja kombinira hrskavu teksturu keksa s bogatim, čokoladnim okusom. 
                    Svaki zalogaj otkriva slatku raskoš čokolade, čineći ih omiljenim izborom za sve ljubitelje slatkog.
                </p>                
            </div>

        </div> 
        <script>
            function redirectToPage(url) {
                window.location.href = url; 
            }
        </script>
        
    </div>

</div>


<!--Footer-->

<footer>
    <div class="footer_main">

        <div class="footer_tag">
            <h2>Lokacije</h2>
            <p>Požega</p>
            <p>Slavonski Brod</p>
            <p>Osijek</p>
        </div>

        <div class="footer_tag">
            <h2>Kontakt</h2>
            <p>+385 99 257 4451</p>
            <p>receptibyella@gmail.com</p>
        </div>

        <div class="footer_tag">
            <h2>Društvene mreže</h2>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-linkedin"></i>
        </div>

    </div>

<p class="end">Ella Delić<span><i class="fa-solid fa-face-grin"></i>FTRR, Požega</span></p>

</footer>




</body>
</html>
</body>
</html>