<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Proiectpw bootsrap</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body style="background: url(&quot;assets/img/bg.jpg&quot;) center / cover no-repeat;">
    <!-- Start: Navbar With Button -->
    <nav class="navbar navbar-light navbar-expand-md py-3" style="background: url(&quot;assets/img/bg.jpg&quot;) center, var(--bs-indigo);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: var(--bs-navbar-disabled-color);"><i class="icon-diamond"></i></span><span>Elysium Hotel</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="user_acasa.php">Acasa</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilitati.php">Facilitati</a></li>
                    <li class="nav-item"><a class="nav-link" href="elemente.php">Elemente de Programare Web</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="sondaj.php">Sondaj</a></li>
                </ul><span class="navbar-text">Salut,<?php echo $_SESSION['user_name'];?>&nbsp;</span><button class="btn btn-primary" type="button" style="border-bottom-color: var(--bs-navbar-color);background: rgb(253,13,114);" onclick="location.href='Inregistrare/logout.php'">Logout</button>
            </div>
        </div>
    </nav><!-- End: Navbar With Button -->
    <div style="padding-left: 20px;">
        <h1>Sondaj de opinie </h1>
        <form action="" method="POST">
            <h2>1. Când planificați o călătorie, cât de des vizitați site-ul hotelului înainte de a face o rezervare?</h2>
            <input type="radio" name="frecventa-vizitare" value="Intotdeauna">Intotdeauna<br>
            <input type="radio" name="frecventa-vizitare" value="De obicei">De obicei<br>
            <input type="radio" name="frecventa-vizitare" value="Uneori">Uneori<br>
            <input type="radio" name="frecventa-vizitare" value="Rareori">Rareori<br>
            <input type="radio" name="frecventa-vizitare" value="Niciodata">Niciodata<br>

            <h2>2. Ce informații vă interesează cel mai mult pe site-ul hotelului?</h2>
            <input type="checkbox" name="informatii-interes[]" value="Descrierea camerei și a facilităților">Descrierea camerei și a facilităților<br>
            <input type="checkbox" name="informatii-interes[]" value="Galeria foto a camerelor și a hotelului">Galeria foto a camerelor și a hotelului<br>
            <input type="checkbox" name="informatii-interes[]" value="Prețurile și disponibilitatea">Prețurile și disponibilitatea<br>
            <input type="checkbox" name="informatii-interes[]" value="Serviciile și facilitățile oferite de hotel">Serviciile și facilitățile oferite de hotel<br>
            <input type="checkbox" name="informatii-interes[]" value="Informații despre atracțiile turistice din zonă">Informații despre atracțiile turistice din zonă<br>
            <input type="checkbox" name="informatii-interes[]" value="Opiniile și recenziile altor oaspeți">Opiniile și recenziile altor oaspeți<br>
            <input type="checkbox" name="informatii-interes[]" value="Altele">Altele (vă rugăm să specificați): <input type="text" name="informatii-interes[]-altele"><br>

            <h2>3. Găsiți site-ul nostru ușor de navigat?</h2>
            <input type="radio" name="usor-de-navigat" value="Da">Da<br>
            <input type="radio" name="usor-de-navigat" value="Nu">Nu<br>

            <h2>4. Ce ați dori să îmbunătățim sau să adăugăm pe site-ul nostru?</h2>
            <input type="checkbox" name="imbunatatiri[]" value="Informații mai detaliate despre facilități și servicii">Informații mai detaliate despre facilități și servicii<br>
            <input type="checkbox" name="imbunatatiri[]" value="O secțiune de rezervări mai intuitivă">O secțiune de rezervări mai intuitivă<br>
            <input type="checkbox" name="imbunatatiri[]" value="Galerii foto mai bogate">Galerii foto mai bogate<br>
            <input type="checkbox" name="imbunatatiri[]" value="Recenzii și testimoniale mai vizibile">Recenzii și testimoniale mai vizibile<br>
            <input type="checkbox" name="imbunatatiri[]" value="Un blog cu recomandări de călătorie">Un blog cu recomandări de călătorie<br>
            <input type="checkbox" name="imbunatatiri[]" value="Altele">Altele (vă rugăm să specificați): <input type="text" name="imbunatatiri[]-altele"><br>

            <h2>5. Sunteți mulțumit de aspectul vizual al site-ului nostru?</h2>
            <input type="radio" name="aspect-vizual" value="Da">Da<br>
            <input type="radio" name="aspect-vizual" value="Nu">Nu<br>

            <h2>6. Ați recomanda site-ul nostru altor persoane care călătoresc în zonă?</h2>
            <input type="radio" name="recomandare" value="Da">Da<br>
            <input type="radio" name="recomandare" value="Nu">Nu<br>


            <button class="btn btn-primary fs-5 me-2 py-2 px-4" type="submit" style="background: linear-gradient(var(--bs-teal) 0%, var(--bs-success) 62%);" >Trimite</button>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Informațiile de la formular
                $frecventaVizitare = $_POST["frecventa-vizitare"];
                $informatiiInteres = implode(", ", $_POST["informatii-interes"]);
                $usorDeNavigat = $_POST["usor-de-navigat"];
                $imbunatatiri = implode(", ", $_POST["imbunatatiri"]);
                $aspectVizual = $_POST["aspect-vizual"];
                $recomandare = $_POST["recomandare"];

                // Adresa de email destinatar
                $destinatar = "elysium@elysiumhotel.com";

                // Subiectul și conținutul emailului
                $subiect = "Sondaj de opinie - Răspunsuri";
                $mesaj = "Răspunsuri la sondaj de opinie:\n\n";
                $mesaj .= "1. Când planificați o călătorie, cât de des vizitați site-ul hotelului înainte de a face o rezervare? \n <br>";
                $mesaj .= "- $frecventaVizitare \n\n <br><br>";
                $mesaj .= "2. Ce informații vă interesează cel mai mult pe site-ul hotelului? \n<br>";
                $mesaj .= "- $informatiiInteres \n\n<br><br>";
                $mesaj .= "3. Găsiți site-ul nostru ușor de navigat? \n<br>";
                $mesaj .= "- $usorDeNavigat \n\n<br><br>";
                $mesaj .= "4. Ce ați dori să îmbunătățim sau să adăugăm pe site-ul nostru? \n<br>";
                $mesaj .= "- $imbunatatiri \n\n<br><br>";
                $mesaj .= "5. Sunteți mulțumit de aspectul vizual al site-ului nostru? \n<br>";
                $mesaj .= "- $aspectVizual \n\n<br><br>";
                $mesaj .= "6. Ați recomanda site-ul nostru altor persoane care călătoresc în zonă? \n<br>";
                $mesaj .= "- $recomandare \n\n<br><br>";

                // Antet pentru a indica formatul emailului și codificarea caracterelor
                $antet = "From: sondaj@elysiumhotel.com\r\n";

                echo "Mesajul transmis este: ", $destinatar, "<br>", $subiect, "<br>", $mesaj, "<br>", $antet;
                // Trimiterea emailului
                if (mail($destinatar, $subiect, $mesaj, $antet)) {
                    echo "<br><p> Mulțumim pentru participare! Răspunsurile au fost trimise cu succes. </p> <br>";
                } else {
                    echo "<br><p> Ne pare rău, dar nu am putut trimite răspunsurile. Vă rugăm să încercați mai târziu.</p><br>";
                }
            }
            ?>
        </form>
    </div><!-- Start: Footer Clean -->
    <footer class="text-center py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <p class="text-muted my-2" style="color: var(--bs-black);font-weight: bold;">Copyright&nbsp;© Gortoescu Ionut Adrian</p>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg></div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item" style="color: var(--bs-black);">Copyright © Elysium Hotel</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!-- End: Footer Clean -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>