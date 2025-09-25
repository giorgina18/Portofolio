<?php
require_once 'template-parts/header.php';
?>

<body>
    <!-- home page  -->
    <section class="container">
        <div class="info">

            <div class="info-home">
                <h1>Hoi, ik ben Giorgina Cali</h1>
                <p>Ik ben 20 jaar en volg de opleiding Software Development aan het Media College Amsterdam,<br> waar ik nu in mijn derde jaar zit.<br>
                    Mijn interesse en focus liggen vooral bij front-end en back-end development.</p>
                <button href="#" class="button-info">Klik hier voor meer informatie</button>
            </div>

            <div class="info-foto-home">
                <img class="foto-me" src="img/foto-me.jpg" alt="foto van wie ik ben">
            </div>
        </div>
    </section>

    <!-- Card slider -->
    <section class="container card-slider">
        <h1 class="card-text ">Mijn projecten</h1>
        <div class="card-wrapper ">
            <div class="swiper portfolio-slider">
                <ul class="card-list swiper-wrapper">
                    <!-- webshop -->
                    <li class="card-item swiper-slide">
                        <a href="https://36725.hosts2.ma-cloud.nl/webshop_BO/" class="card-link">
                            <img src="img/webshop.png" alt="" class="card-image">
                            <div class="card-item__content">
                                <p class="badge webshop">Webshop</p>
                                <h2 class="card-title">De opdracht van dit project was om een webshop te maken op basis van de gegeven layout en stijl. Ik heb de webshop gebaseerd op Bol.com en voorzien van drie features die we moesten maken. </h2>
                            </div>
                            <button class="card-button material-symbols-outlined">
                                arrow_forward
                            </button>
                        </a>
                    </li>
                    <!-- input output -->
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="img/input_output.png" alt="" class="card-image">
                            <div class="card-item__content">
                                <p class="badge input_output">Input Output</p>
                                <h2 class="card-title">De opdracht van dit project was om een input-output toepassing te maken. Mijn idee was een autootje te bouwen dat bestuurd wordt met een joystick, de joystick dient als input en het autootje als output. </h2>
                            </div>

                            <button class="card-button material-symbols-outlined">
                                arrow_forward
                            </button>
                        </a>
                    </li>
                    <!-- sv_unity -->
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="img/SV-unity.png" alt="" class="card-image">
                            <div class="card-item__content">
                                <p class="badge">SV-Unity</p>
                                <h2 class="card-title">De opdracht van dit project was om tijdens een gesprek met de klant hun ideeën te verzamelen en deze vervolgens zelfstandig uit te werken tot een passend eindproduct. </h2>
                            </div>
                            <button class="card-button material-symbols-outlined">
                                arrow_forward
                            </button>
                        </a>
                    </li>
                    <!-- back end -->
                    <li class="card-item swiper-slide">
                        <a href="#" class="card-link">
                            <img src="img/registratie.png" alt="" class="card-image">
                            <div class="card-item__content">
                                <p class="badge back_end">Back end</p>
                                <h2 class="card-title">De opdracht van dit project was om de back-end security te versterken, zodat gebruikers niet te maken krijgen met broken access control.</h2>
                            </div>
                            <button class="card-button material-symbols-outlined">
                                arrow_forward
                            </button>
                        </a>
                    </li>
                    <!-- nxt museum -->
                    <li class="card-item swiper-slide">
                        <a href="http://localhost/nxtmuseum/" class="card-link">
                            <img src="img/nxtmuseum.png" alt="" class="card-image">
                            <div class="card-item__content">
                                <p class="badge museum">NXT museum</p>
                                <h2 class="card-title">De opdracht van dit project was om een professionele, tweetalige museumwebsite te maken met informatie, afbeeldingen en bezoekersreviews.</h2>
                            </div>
                            <button class="card-button material-symbols-outlined">
                                arrow_forward
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </section>


    <!-- linking swiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>

</html>

<?php
require_once 'template-parts/footer.php';
?>