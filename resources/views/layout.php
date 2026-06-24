<?php
/**
 * @var string $title
 * @var string $content
*/
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $title ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght,CRSV@100..900,0&display=swap" rel="stylesheet">

    <link href="/assets/fonts/ntsomic/stylesheet.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg"/>
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png"/>
    <meta name="apple-mobile-web-app-title" content="Эверс Груп Рус"/>
    <link rel="manifest" href="/assets/favicon/site.webmanifest"/>
</head>
<body class="no-js">
<?php include VIEW_PATH . 'partials/header.php'; ?>

<?= $content ?>

<?php include VIEW_PATH . 'partials/footer.php'; ?>

<?php include VIEW_PATH . 'partials/popups/request.php'; ?>
<?php include VIEW_PATH . 'partials/popups/question.php'; ?>

<div class="form-error-toast" id="form-error-toast">
    Поля, отмеченные&nbsp;(*), обязательны для заполнения.
    <button type="button" class="form-error-toast__close">
        <svg width="1em" height="1em">
            <use xlink:href="/assets/img/icons.svg#times"/>
        </svg>
    </button>
</div>


<?php // TODO: Remove on production ?>
<?php if (!defined('BUILD')): ?>
    <?= vite(['resources/js/app.ts', 'resources/css/app.scss']) ?>
    <!-- vite scripts for develop -->
<?php endif; ?>
</body>
</html>