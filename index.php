<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Salon samochodów luksusowych, prestiżowe auta" />
    <meta name="author" content="Daniel Strzelecki" />
    <title>Salon Samochodów luksusowych - Luxury Cars</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles2.css" rel="stylesheet" />
</head>

<?php
    include_once 'scripts/Classes/Baza.php';
    include_once 'scripts/Classes/UserManager.php';
    $db = new Baza("localhost", "root", "", "LuxuryCars");
    $um = new UserManager();
    session_start();
    $user = $um->getLoggedInUser($db, session_id());
?>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/Luxury_Cars.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">O nas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Nasze auta</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Konfigurator</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Zamówienia</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                    <?php
                    if($user < 0){
                        echo'<li class="nav-item"><a class="nav-link" href="login.php"><i
                                class="fas fa-user fa-inverse"></i></a>
                    </li>';
                    }
                    else{
                        echo'<li class="nav-item"><a class="nav-link" style="color: #ffc800;" href="scripts/zaloguj.php?akcja=wyloguj">Wyloguj się</a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Witamy w salonie Luxury Cars!</div>
            <div class="masthead-heading text-uppercase">Z nami spełnisz swoje marzenia</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Znajdź swoje auto</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">O nas</h2>
                <h3 class="section-subheading text-muted">Dlaczego my?</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-car fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Niepowtarzalne auta</h4>
                    <p class="text-muted">W naszej ofercie posiadamy auta, które są rzadkością na polskich a nawet
                        zagranicznych drogach</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-money-bill-wave fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Przystępne ceny</h4>
                    <p class="text-muted">Oferujemy przystępne ceny i liczne promocje dzięki, którym możesz spełnić
                        swoje marzenie o luksusowym aucie</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-piggy-bank fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Wygodne kredytowanie</h4>
                    <p class="text-muted">Nie posiadasz tak dużej gotówki? Nic straconego! Nasza firma oferuje wygodne
                        plany kredytowe, przystosowane do klienta</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nasze auta</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- 1 auto-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">BMW</div>
                            <div class="portfolio-caption-subheading text-muted">M5</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- 2 auto-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Shelby</div>
                            <div class="portfolio-caption-subheading text-muted">F250</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- 3 auto-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Bentley</div>
                            <div class="portfolio-caption-subheading text-muted">Continental GT</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- 4 auto-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Mercedes-Benz</div>
                            <div class="portfolio-caption-subheading text-muted">Klasa G</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- 5 auto-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lamborghini</div>
                            <div class="portfolio-caption-subheading text-muted">Aventador</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- 6 auto-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Porsche</div>
                            <div class="portfolio-caption-subheading text-muted">911 Turbo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Konfigurator</h2>
                <h3 class="section-subheading text-muted">Wypełnij formularz, aby zamówić swoje wymarzone auto</h3>
            </div>
            <form action="scripts/zamowienia.php" method="POST">
                <div id="clientdata">
                    <h4>Dane klienta:</h4>
                    <table>
                        <tr>
                            <td class="first"><label for="lname">Imię: </label> </td>
                            <td><input type="text" id="lname" name="lname" placeholder="Jan" 
                            <?php
                            if($user >= 0){
                                echo "value=".$db->select("SELECT * FROM `users` WHERE `id`=$user", ["name"])." disabled";
                            }
                            ?>
                            />
                                <span id="im_error" class="czerwone"></span><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="lname">Nazwisko: </label> </td>
                            <td><input type="text" id="lsurname" name="lsurname" placeholder="Kowalski" 
                            <?php
                            if($user >= 0){
                                echo "value=".$db->select("SELECT * FROM `users` WHERE `id`=$user", ["surname"])." disabled";
                            }
                            ?>
                            />
                                <span id="nazw_error" class="czerwone"></span><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="number">Numer telefonu: </label></td>
                            <td><input type="number" id="number" name="number" placeholder="123456789" 
                            <?php
                            if($user >= 0){
                                echo "value=".$db->select("SELECT * FROM `users` WHERE `id`=$user", ["phone_number"])." disabled";
                            }
                            ?>
                            />
                                <span id="number_error" class="czerwone"></span><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="country">Państwo: </label> </td>
                            <td>
                                <select name="country" id="country" 
                                <?php
                                    if($user >= 0){
                                        echo"disabled>";
                                        $cntry = $db->select("SELECT * FROM `users` WHERE `id`=$user", ["country"]);
                                        echo"<option value='$cntry' selected>$cntry</option>";
                                    }
                                    else{
                                        echo">";
                                        echo'<option value="Polska">Polska</option>
                                        <option value="Niemcy">Niemcy</option>
                                        <option value="Wielka Brytania">Wielka Brytania</option>';
                                    }
                                ?>
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="first"><label for="adress_email">Adres e-mail: </label> </td>
                            <td><input type="text" id="adress_email" name="adress_email" placeholder="example@com.pl" 
                            <?php
                            if($user >= 0){
                                echo "value=".$db->select("SELECT * FROM `users` WHERE `id`=$user", ["email"])." disabled";
                            }
                            ?>
                            >
                                <span id="email_error" class="czerwone"></span><br>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="auto">
                    <br>
                    <h4>Dane auta:</h4>
                    <table>
                        <tr>
                            <td><label for="markamodel">Marka i model: </label> </td>
                            <td><select name="markamodel" id="markamodel" onchange="uzupelnianieTypow()">
                                    <option value="---">---</option>
                                    <option value="BMW M5">BMW M5</option>
                                    <option value="Shelby F250">Shelby F250</option>
                                    <option value="Bentley Continental GT">Bentley Continental GT</option>
                                    <option value="Mercedes-Benz Klasa G">Mercedes-Benz Klasa G</option>
                                    <option value="Lamborghini Aventador">Lamborghini Aventador</option>
                                    <option value="Porsche 911 Turbo">Porsche 911 Turbo</option>
                                </select>
                                <span id="markamodelerror" class="czerwone"></span><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="typ">Typ: </label> </td>
                            <td><select name="typ" id="typ">
                                    <!-- <option value="Sedan">Sedan</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Terenowy">Terenowy</option>
                                    <option value="Supersamochod">Supersamochód</option>
                                    <option value="Kabriolet">Kabriolet</option> -->
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="silnik">Silnik: </label></td>
                            <td><select name="silnik" id="silnik">
                                    <!-- <option value="4.4l V8 600KM">4.4l V8 600KM</option>
                                    <option value="4.4l V8 650KM">4.4l V8 650KM</option>
                                    <option value="7.3l V8 671KM">7.3l V8 671KM</option>
                                    <option value="6.0l W12 560KM">6.0l W12 560KM</option>
                                    <option value="4.0l V8 422KM">4.0l V8 422KM</option>
                                    <option value="4.0l V8 585KM">4.0l V8 585KM</option>
                                    <option value="6.5l V12 700KM">6.5l V12 700KM</option>
                                    <option value="3.7l B6 580KM">3.7l B6 580KM</option> -->
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="kolor">Kolor: </label> </td>
                            <td>
                                <select name="kolor" id="kolor">
                                    <option value="czarny">czarny</option>
                                    <option value="biały">biały</option>
                                    <option value="czerwony">czerwony</option>
                                    <option value="granatowy">granatowy</option>
                                    <option value="zielony">zielony</option>
                                </select><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Dodatkowe wyposażenie:</td>
                            <td>
                                <input type="checkbox" name="audio" id="audio" value="audio"> <label for="audio">System
                                    Premium Audio</label><br>
                                <input type="checkbox" name="adaptacyjne_zawieszenie" id="adaptacyjne_zawieszenie"
                                    value="adaptacyjne_zawieszenie"> <label for="adaptacyjne_zawieszenie">Adaptacyjne
                                    zawieszenie</label><br>
                                <input type="checkbox" name="kamery_parkowania" id="kamery_parkowania"
                                    value="kamery_parkowania"><label for="kamery_parkowania">Kamery parkowania 360
                                    stopni</label><br><br>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="sposob_zaplaty">
                    <h4>Sposób zapłaty:</h4>
                    <input type="radio" name="payment-method" id="gotowka" value="gotowka" checked> <label
                        for="gotówka">Gotówka</label>
                    <input type="radio" name="payment-method" id="przelew" value="przelew"> <label
                        for="przelew">Przelew</label>
                    <input type="radio" name="payment-method" id="raty" value="raty"> <label for="raty">Raty</label>
                </div>
                <div id="sendrest">
                    <?php
                        if($user >= 0){
                            echo '<input id="zamow" type="submit" value="Zamów" name="zamow">';
                            echo '<input id="anuluj1" type="reset" value="Anuluj">';
                        }
                        else{
                            echo '<h4>Przed złożeniem zamówienia najpierw zaloguj się <i
                            class="fas fa-user"></i></h4>';
                        }
                    ?>
                    
                </div>
            </form>
        </div>
    </section>
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Zamówienia</h2>
                <h3 class="section-subheading text-muted">Poniżej możesz sprawdzić jakie auta zamówiłeś</h3>
            </div>
            <div id="list">
                <?php
                    if($user < 0){
                        echo "<p>Aby wyświetlić swoje zamówienia najpierw zaloguj się <i
                        class='fas fa-user'></i></p>";
                    }
                    else{
                        $orders = $db->showOrders("SELECT * FROM `orders` WHERE customerId = '$user'",['car', 'engine', 'type', 'color', 'equipment', 'payment_method']);
                        $str = "";
                        if ($orders === null || count($orders) == 0){
                            echo "<p>Nie zamówiłeś jeszcze żadnego auta!</p>";
                        }
                        else {
                            $str .= '<table><thead><tr><th>Marka i model</th><th>Typ</th><th>Silnik</th><th>Kolor</th><th>Wyposażenie</th><th>Płatność</th></tr></thead>';
                            foreach ($orders as $order) {
                                $str .= '<tr>';
                                $str .= "<td>".$order->car."</td>";
                                $str .= "<td>".$order->type."</td>";
                                $str .= "<td>".$order->engine."</td>";
                                $str .= "<td>".$order->color."</td>";
                                $str .= "<td>".$order->equipment."</td>";
                                $str .= "<td>".$order->payment_method."</td>";
                                $str .= "<td><button onclick='location.href=`scripts/zamowienia.php?akcja=usun&element=$order->id`'><i class='fas fa-trash-alt'></i></button></td>";
                                $str .= "<td><a href='#about'><button onclick='edytujDane(".$order->id.")'><i class='fas fa-edit'></i></button></a></td>";
                                $str .= "<td><p id='edit".$order->id."'></p></td>";
                                $str .= "</tr>";
                            }
                            $str .= '</tbody></table>';
                            echo "$str";
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a class="fb" href="www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a class="ig" href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a class="tw" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a class="yt" href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Znajdź nas</h2>
                <h3 class="section-subheading text-muted">Znajdziejsz nas tutaj</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <div id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <p>Luxury Cars sp. z o. o.</p>
                        <p>ul. Krakowskie Przedmieście 30A</p>
                        <p>20-310 Lublin</p>
                        <p>Nr telefonu: 784-125-345</p>
                    </div>
                    <div class="col-md-6">
                        <div id="mapka" style="width:350px; height:250px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Daniel Strzelecki 2021</div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">BMW</h2>
                                <p class="item-intro text-muted">M5</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>Samochody BMW serii 5 Limuzyna M stanowią niedoścignione połączenie typowego dla M
                                    sportowego charakteru z elegancją biznesowych limuzyn. Odkryj cztery unikalne
                                    samochody M o silnej osobowości: nieprzeciętna moc 635 KM (467 kW) i przyspieszenie
                                    od 0 do 100 km/h w zaledwie 3,0 s sprawiają, że BMW M5 CS to najpotężniejsze BMW M5
                                    Limuzyna w historii. Limitowany model specjalny z unikalnym układem jezdnym i
                                    elementami stylistycznymi M dostępnymi wyłącznie w tym modelu gwarantuje autentyczne
                                    wrażenia z jazdy rodem z motorsportu. BMW M5 Competition xDrive o mocy 625 KM (460
                                    kW) z układem jezdnym dostrojonym do wyczynowej jazdy spełnia najwyższe oczekiwania
                                    pod względem osiągów. Wyczynowa sportowa limuzyna podkreśla to wizualnie licznymi
                                    elementami stylistycznymi w błyszczącym kolorze czarnym. Oprócz napędu M xDrive
                                    zaprojektowanego z myślą o maksymalnej trakcji i dynamice BMW M5 wyposażone jest w
                                    układ jezdny spełniający wszelkie wymagania w zakresie sportowego komfortu jazdy na
                                    długich dystansach. W połączeniu z 8-cylindrowym silnikiem M o mocy 600 KM (441 kW)
                                    zapewnia to porywającą i zwinną dynamikę jazdy. Kwartet uzupełnia BMW M550i xDrive
                                    Limuzyna: atletyczne BMW serii 5 Limuzyna oferuje moc 530 KM (390 kW) i wyróżnia się
                                    bardzo zrównoważonym połączeniem osiągów, komfortu i wydajności.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cena:</strong>
                                        Od 849900 PLN
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Lamborghini</h2>
                                <p class="item-intro text-muted">Aventador</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                <p>Do napędu Aventadora LP700-4 użyto nowej jednostki V12 o rozwarciu cylindrów równym
                                    60° i pojemności skokowej 6498 cm³. Silnik nosi wewnętrzne oznaczenie L539, jest
                                    to czwarty motor konstrukcji Lamborghini (drugi V12).
                                    Za przeniesienie napędu odpowiada jednosprzęgłowa 7-biegowa przekładnia
                                    półautomatyczna zaprojektowana przez Graziano Trasmissioni.
                                    Nowy w pełni elektronicznie sterowany układ napędu AWD pochodzi od szwedzkiej firmy
                                    Haldex Traction, jest to czwarta generacja ich wyrobu.
                                    Przyspieszenie od 0 do 100km/h zajmuje mu 2,9 sekundy a prędkość maksymalna wynosi
                                    350km/h.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cena:</strong>
                                        Od 1200000 PLN
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Bentley</h2>
                                <p class="item-intro text-muted">Continental GT</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                <p>Poznaj Continental GT – przekonującą deklarację osiągów, luksusu i motoryzacyjnego
                                    piękna.
                                    Dowiedz się więcej o wyjątkowym Continental GT dzięki czystej mocy i
                                    atletycznej zwinności dodaje emocji i odkryć w sercu każdej jazdy. Jego zniewalający
                                    duch jest uchwycony w eleganckich proporcjach tego ostatecznego Grand Tourera, a
                                    innowacyjne technologie sprawiają, że jest to najbardziej zaawansowany model GT
                                    Bentley, jaki kiedykolwiek powstał.
                                    Niesamowita prędkość to najnowszy dodatek do gamy Continental, a wraz z nią ogromny
                                    poziom mocy i dramatyzmu. Dostępny w wersjach nadwozia typu coupé i kabriolet ,
                                    posiada specjalnie skalibrowany układ napędowy z fenomenalnym silnikiem W12
                                    dostrojonym tak, aby dostarczać nieustanną moc zakręt za zakrętem, mila za milą. A
                                    dzięki Bentley Dynamic Ride i sterowaniu wszystkimi kołami zapewnia przyśpieszającą
                                    puls zwrotność i kontrolę. Unikalny design Speed ​​podkreśla jego podwyższony status
                                    w gamie, nie pozostawiając wątpliwości, że jest to GT dla poszukiwaczy adrenaliny.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cena:</strong>
                                        Od 950000 PLN
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Mercedes-Benz</h2>
                                <p class="item-intro text-muted">Klasa G</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                <p>DNA pojazdu terenowego: legendarne, solidne i niemalże niezniszczalne. Zaprojektowali
                                    części, których funkcje do dziś niezmiennie spełniają swoje zadanie. Są to elementy
                                    konstrukcyjne, których wyjątkowy charakter kształtował się przez całe pokolenia.
                                    Od 40 lat jedyna w swoim rodzaju: tylko Klasa G wygląda jak Klasa G. Niepowtarzalne
                                    nadwozie i wnętrze podkreślają elementy G manufaktur, dzięki którym na Twoje
                                    życzenie możesz wyraziście jak nigdy dotąd odzwierciedlić swoją osobowość.
                                    Nadzwyczajna dzielność terenowa stanowi inspirację i cel Klasy G. Od zawsze wyznacza
                                    standardy w zakresie zdolności pokonywania wzniesień, głębokości brodzenia oraz
                                    stabilności jazdy przy nachyleniu. 585KM i 850 Nm rozpędzają G klase do setki w
                                    4,5s.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cena:</strong>
                                        Od 700000 PLN
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Shelby</h2>
                                <p class="item-intro text-muted">F250</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                <p>Ford nigdy nie przestaje iść do przodu. Dlatego F250 na rok 2021
                                    jest wyposażony w silnik V8 o pojemności 7,3 l OHV oraz dostępny w ofercie
                                    Power Stroke ® V8 Turbo Diesel. Imponująca moc znamionowa silników benzynowych i
                                    wysokoprężnych F250 w połączeniu z wytrzymałą ramą i podwoziem pozwala
                                    osiągnąć mocne wyniki w każdej kategorii zdolności przewozowych i holowniczych, w
                                    tym najlepszą w swojej klasie moc, najlepszą w swojej klasie DMC, najlepszą w swojej
                                    klasie ładowność i najlepsze holowanie z siodełkiem i konwencjonalne holowanie w
                                    swojej klasie.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cena:</strong>
                                        Od 1000000 PLN
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Porsche</h2>
                                <p class="item-intro text-muted">911 Turbo</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                <p>Inżynierowie Porsche lubią rozmawiać o najdoskonalszym samochodzie sportowym w
                                    historii.
                                    Niesamowita wydajność, a jednocześnie wygoda i w pełni nadaje się do codziennego
                                    użytku. Modele 911 Turbo kontynuują tę filozofię. Przyspieszenie do setki to 2,8s a
                                    prędkość maksymalna 320 km/h.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cena:</strong>
                                        Od 900000 PLN
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Zamknij
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>