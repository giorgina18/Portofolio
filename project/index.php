<?php
require_once '../includes/db_functions.php';
require_once '../includes/Utils.php';
require_once '../template-parts/header.php';

$projectModel = new Project();
$projectId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$project = $projectModel->getById($projectId);
?>

    <section class="container">
        <?php if ($project): ?>
            <div class="project-detail">
                <h1><?= htmlspecialchars($project['title']) ?></h1>
                <p class="category"><strong>Categorie:</strong> <?= htmlspecialchars($project['category']) ?></p>
                <img src="<?= Utils::asset($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="project-image">

                <div class="project-description">
                    <p><?= nl2br(htmlspecialchars($project['description'])) ?></p>
                </div>

                <p>
                    <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="button-info">
                        Bekijk project
                    </a>
                </p>

                <p>
                    <a href="<?= Utils::baseUrl() ?>" class="button-back">← Terug naar overzicht</a>
                </p>
            </div>
        <?php else: ?>
            <p>Project niet gevonden.</p>
            <p><a href="<?= Utils::baseUrl() ?>">← Terug naar overzicht</a></p>
        <?php endif; ?>
    </section>


<?php require_once '../template-parts/footer.php'; ?>