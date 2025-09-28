<?php
require_once '../includes/db_functions.php';
require_once '../includes/Utils.php';
require_once '../template-parts/header.php';

$projectModel = new Project();
$projectId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

?>

<section class="container">

<?php if ($projectId > 0): ?>
    <?php
    // Project detailpagina
    $project = $projectModel->getById($projectId);
    if ($project):
    ?>
        <div class="project-detail">
            <h1 class="title-projects"><?= htmlspecialchars($project['title']) ?></h1>
            <p class="category"><strong>Categorie:</strong> <?= htmlspecialchars($project['category']) ?></p>

            <!-- Extra images en teksten -->
            <?php for ($i = 0; $i <= 3; $i++): ?>
                <?php
                    $imgKey = $i === 0 ? 'image' : 'image'.$i;
                    $textKey = $i === 0 ? 'text' : 'text'.$i;
                ?>
                <?php if (!empty($project[$imgKey])): ?>
                    <img src="<?= Utils::asset($project[$imgKey]) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="project-image">
                <?php endif; ?>
                <?php if (!empty($project[$textKey])): ?>
                    <div class="project-description">
                        <p><?= nl2br(htmlspecialchars($project[$textKey])) ?></p>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if (!empty($project['link'])): ?>
                <p>
                    <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="button-info">
                        Bekijk project live
                    </a>
                </p>
            <?php endif; ?>

            <p>
                <a href="<?= Utils::baseUrl() ?>" class="button-back">← Terug naar overzicht</a>
            </p>
        </div>
    <?php else: ?>
        <p>Project niet gevonden.</p>
        <p><a href="<?= Utils::baseUrl() ?>">← Terug naar overzicht</a></p>
    <?php endif; ?>

<?php else: ?>
    <?php

    
    // Homepage / overzicht van projecten
    $projects = $projectModel->getAll();
    foreach ($projects as $project):
    ?>
        <div class="project-preview">
            <h2><?= htmlspecialchars($project['title']) ?></h2>
            <?php if (!empty($project['image'])): ?>
                <img src="<?= Utils::asset($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="project-image">
            <?php endif; ?>
            <p><?= nl2br(htmlspecialchars($project['description'])) ?></p>
            <p><a href="index.php?id=<?= $project['id'] ?>">Bekijk project</a></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

</section>

<?php require_once '../template-parts/footer.php'; ?>
