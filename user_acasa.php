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
    <title>Elysium Hotel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body style="background: url(assets/img/bg.jpg) center;">
    <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
        </ul>
    </div><!-- Start: Navbar With Button -->
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
    <!-- Start: Banner Clean -->
    <section class="py-4 py-xl-5" style="background: url(&quot;assets/img/Lobby-Elysium-Hotel.jpg&quot;) center / cover no-repeat;">
        <div class="container">
            <div class="text-center p-4 p-lg-5">
                <p class="fw-bold text-primary" style="color: var(--bs-danger);">Locul in care relaxarea nu are sfarsit!</p>
                <h1 class="fw-bold mb-4" style="color: var(--bs-highlight-bg);">Elysium Hotel</h1><button class="btn btn-primary fs-5 me-2 py-2 px-4" type="button" style="background: linear-gradient(var(--bs-teal) 0%, var(--bs-success) 62%);" disabled>Rezerva acum</button>
            </div>
        </div>
    </section><!-- End: Banner Clean -->
    <!-- Start: Articles Cards -->
    <div class="container py-4 py-xl-5">
        <!-- Start: Simple Slider -->
        <div class="simple-slider">
            <!-- Start: Slideshow -->
            <div class="swiper-container">
                <!-- Start: Slide Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Start: Slide -->
                    <div class="swiper-slide" style="background: url(&quot;assets/img/01-Hotel-General-View-2.jpg&quot;) center center / cover no-repeat;"></div><!-- End: Slide -->
                    <!-- Start: Slide -->
                    <div class="swiper-slide" style="background: url(&quot;assets/img/Fire_Place_Lounge_Terrace_B.jpg&quot;) center center / cover no-repeat;"></div><!-- End: Slide -->
                    <!-- Start: Slide -->
                    <div class="swiper-slide" style="background: url(&quot;assets/img/Lobby.jpg&quot;) center center / cover no-repeat;"></div><!-- End: Slide -->
                    <!-- Start: Slide -->
                    <div class="swiper-slide" style="background: url(&quot;assets/img/Sunset-Terrace-1.jpg&quot;) center center / cover no-repeat;"></div><!-- End: Slide -->
                    <!-- Start: Slide -->
                    <div class="swiper-slide" style="background: url(&quot;assets/img/Family_Cyprian_Maisonette_B.jpg&quot;) center center / cover no-repeat;"></div><!-- End: Slide -->
                    <div class="swiper-slide" style="background: url(&quot;assets/img/020_Royal_Garden_Villawith_Private_Pool3_RWE8620.jpg&quot;) center center / cover no-repeat;"></div><!-- End: Slide -->
                </div><!-- End: Slide Wrapper -->
                <!-- Start: Pagination -->
                <div class="swiper-pagination"></div><!-- End: Pagination -->
                <!-- Start: Previous -->
                <div class="swiper-button-prev"></div><!-- End: Previous -->
                <!-- Start: Next -->
                <div class="swiper-button-next"></div><!-- End: Next -->
            </div><!-- End: Slideshow -->
        </div><!-- End: Simple Slider -->
        <div class="row mb-5">
            <div class="col-md-8 col-xl-8 text-center mx-auto">
                <h2>Facilități</h2>
                <p>Vă invităm cu căldură să vă bucurați de facilitățile noastre de lux, unde veți descoperi o experiență excepțională în fiecare aspect al șederii dvs. La dispoziția dvs. se află camere deosebite, un restaurant rafinat cu un bar elegant și săli de conferință de top.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/Deluxe-Bedroom-Sea-View.jpg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Rooms</h4>
                        <p class="card-text">Când vine vorba de cazare, vă așteaptă camerele noastre elegante și confortabile, create cu grijă pentru a vă oferi relaxare și odihnă într-un cadru luxuriant. Indiferent dacă sunteți într-o călătorie de afaceri sau într-o escapadă de vacanță, veți găsi camerele noastre deosebite ca un sanctuar personalizat, unde puteți savura un somn odihnitor și vă puteți bucura de facilitățile moderne și de atenția la detalii.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/Lemonia-Piazza-Elysium-Hotel.jpg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Restaurant &amp; Bar</h4>
                        <p class="card-text">Pentru momente gastronomice de neuitat, vă invităm în restaurantul nostru rafinat, unde veți fi răsfățați cu preparate culinare fine și inovatoare, pregătite de bucătari talentați. Însoțite de o selecție de băuturi premium, veți trăi o experiență culinară de neegalat. După o zi plină, vă puteți relaxa în barul nostru elegant, savurând cocktailuri excepționale și băuturi rafinate.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/Basilica-Classroom-set-up.jpg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Săli de conferință</h4>
                        <p class="card-text">Pentru evenimentele și întâlnirile dvs. importante, vă stăm la dispoziție cu sălile noastre de conferință de top. Echipate cu tehnologie de ultimă generație și un personal dedicat, aceste spații elegante și bine amenajate sunt ideale pentru organizarea conferințelor, seminarelor, întâlnirilor de afaceri sau evenimentelor corporative. Vă punem la dispoziție facilitățile necesare, iar serviciul nostru impecabil va asigura că evenimentul dvs. se va desfășura fără probleme și va fi un succes garantat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Articles Cards -->
    <!-- Start: Testimonials Centered -->
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Reviews</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-center">Experiența noastră la acest hotel de lux a fost pur și simplu extraordinară! Camerele sunt rafinate și confortabile, iar personalul este atent și prietenos. Ne-am bucurat de facilitățile de top și de serviciile impecabile. Recomand cu încredere acest hotel pentru o ședere de lux memorabilă!</p>
                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/70.jpg">
                        <div>
                            <p class="fw-bold text-primary mb-0">Ann C. Nolen</p>
                            <p class="text-muted mb-0">4.7/5</p>
                        </div>
                    </div>
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-center">Oaza de lux în mijlocul orașului! Am fost impresionat de eleganța și frumusețea acestui hotel. Camerele sunt spațioase și decorate cu gust, iar personalul a fost extrem de atent și profesionist. Am avut parte de o experiență relaxantă și revitalizantă. Cu siguranță voi reveni!</p>
                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/88.jpg">
                        <div>
                            <p class="fw-bold text-primary mb-0">Ryan J. Speer</p>
                            <p class="text-muted mb-0">4.8/5</p>
                        </div>
                    </div>
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-center">Hotelul de lux pe care îl recomand cu încredere! Am fost impresionat de serviciile impecabile și de atenția la detalii. Camerele sunt superbe, cu facilități moderne și vederi panoramice uimitoare. Restaurantul lor oferă o experiență culinară extraordinară. Vă veți simți răsfățați în fiecare moment al șederii voastre!</p>
                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/76.jpg">
                        <div>
                            <p class="fw-bold text-primary mb-0">Marvin M. Cope</p>
                            <p class="text-muted mb-0">5/5</p>
                        </div>
                    </div>
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"></div>
                    </div>
                </div>
            </div>
        </div><!-- Start: Footer Basic -->
        <footer class="text-center"></footer><!-- End: Footer Basic -->
    </div><!-- End: Testimonials Centered -->
    <!-- Start: Footer Clean -->
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