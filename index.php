<?php
require_once 'template-parts/header.php';
require_once 'includes/db_functions.php';
require_once 'includes/Utils.php';

$projectModel = new Project();
$projects = $projectModel->getAll();
?>

<!-- Home page -->
<section class="container">
    <div class="info">
        <div class="info-home">
            <h1>Hoi, ik ben Giorgina Cali</h1>
            <p>
                Ik ben 20 jaar en volg de opleiding Software Development aan het Media College Amsterdam,<br>
                waar ik nu in mijn derde jaar zit.<br>
                Mijn interesse en focus liggen vooral bij front-end en back-end development.
            </p>
            <a href="over_mij/aboutme.php" class="button-info">Klik hier voor meer informatie</a>
        </div>

        <div class="info-foto-home">
            <img class="foto-me" src="img/giorgina.jpg" alt="foto van wie ik ben">
        </div>
    </div>
</section>

<!-- Card slider -->
<section class="container card-slider" id="projecten">
    <h1 class="card-text">Mijn projecten</h1>
    <div class="card-wrapper">
        <div class="swiper portfolio-slider">
            <ul class="card-list swiper-wrapper">
                <?php if (!empty($projects)): ?>
                    <?php foreach ($projects as $row): ?>
                        <li class="card-item swiper-slide">
                            <a href="<?= Utils::baseUrl('project/single.php?id=' . $row['id']) ?>" class="card-link">
                                <img src="<?= Utils::asset($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" class="card-image">
                                <div class="card-item__content">
                                    <p class="badge"><?= htmlspecialchars($row['category']) ?></p>
                                    <h2 class="card-title"><?= htmlspecialchars($row['description']) ?></h2>
                                </div>
                                <button class="card-button material-symbols-outlined">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Geen projecten gevonden.</p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="swiper-slide-button swiper-button-prev"></div>
    <div class="swiper-slide-button swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</section>


<section class="container" id="skills">
    <h1>Mijn Skills</h1>

    <div class="skills-wrapper">
        <!-- HTML -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/html.png" alt="HTML">
            </div>
            <div class="skill-info">
                <h3>HTML</h3>
                <p>HTML is een van de eerste code die ik heb geleerd op Media College,
                    ik weet ook hoe ik het moet combineren met SASS, CSS, JS en PHP. </p>
            </div>
        </div>

        <!-- CSS -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/css.svg" alt="CSS">
            </div>
            <div class="skill-info">
                <h3>CSS</h3>
                <p>Ik gebruik CSS voor responsive design en om websites er mooier en strakker euit te laten zien.</p>
            </div>
        </div>

        <!-- JavaScript -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/js.webp" alt="JavaScript">
            </div>
            <div class="skill-info">
                <h3>JavaScript</h3>
                <p>Met JavaScript maak ik websites interactief en laat ik elementen reageren op wat mensen doen, zoals klikken of formulieren invullen.
                    Het is wel iets wat ik nog een beetje lastig vind, maar zou er wel graag meer over wil leren.</p>
            </div>
        </div>

        <!-- sass -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/sass.png" alt="React">
            </div>
            <div class="skill-info">
                <h3>Sass</h3>
                <p>Ik heb ervaring met SASS en heb het bij een eerder project gebruikt om CSS makkelijker te organiseren en sneller aan te passen, wat ik erg handig en makkelijk vond om toe te passen.</p>
            </div>
        </div>

        <!-- PHP -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/php.png" alt="PHP">
            </div>
            <div class="skill-info">
                <h3>PHP</h3>
                <p>Ik heb ervaring met PHP en gebruik ik om dingen achter de schermen te regelen, zoals data opslaan of zoals nu naar mijn projecten verwijzen.</p>
            </div>
        </div>
        <!-- my sql -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/mysql.png" alt="PHP">
            </div>
            <div class="skill-info">
                <h3>MySQL</h3>
                <p>Ik heb wat ervaring met MySQL, waarbij ik werkte met databases om gegevens op te slaan en op te vragen. Ik vind het nog een beetje lastig, maar ik zou er wel graag meer over leren.</p>
            </div>
        </div>
        <!-- github -->
        <div class="skill-box">
            <div class="skill-icon">
                <img src="img/github.png" alt="PHP">
            </div>
            <div class="skill-info">
                <h3>Github</h3>
                <p>Ik gebruik GitHub om mijn projecten veilig op te slaan, veranderingen bij te houden en samen te werken als dat nodig is.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'template-parts/footer.php'; ?>