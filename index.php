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



<?php require_once 'template-parts/footer.php'; ?>