<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Page Title -->
        <title><?= $pageTitle ?></title>

        <!-- SEO Tags -->
        <meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1" />
        <meta name="description" content="<?= $pageDesc ?>" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= URL ?>" />
        <meta property="og:site_name" content="JDS Industries" />
        <meta property="og:title" content="JDS Industries - <?= $pageTitle ?>" />
        <meta property="og:description" content="<?= $pageDesc ?>" />
        <meta property="og:image" content="<?= App::path('/resources/images/php-logo.png') ?>" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="670" />

        <!-- Resources -->
        <link href="<?= App::path('/resources/css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= App::path('/resources/css/styles.css') ?>" rel="stylesheet">

    </head>
    <body class="bg-light">

        <nav class="navbar navbar-expand-lg navbar-light" style="color: #cdd7e1; background: #4879b3; box-shadow: inset 100px 0px 100px -50px #062e71, inset -100px 0px 100px -50px #062e71; width: 100%;">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?= App::path('/home') ?>"  style="color: #8ec63f">DRIVERS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"  style="color: #cdd7e1">COMPONENTS</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?= App::path('/stats') ?>"  style="color: #cdd7e1">STATS</a>
                </li>
              </ul>
              <span class="navbar-text" style="color: #cdd7e1"> 
                ASSET TRACKING F1 CLASH
              </span>
            </div>
          </div>
        </nav>

        <!-- Main Content -->
        <?= $this->section('content') ?>

        <!-- Script Resources -->
        <script src="<?= App::path('/resources/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>

    </body>
</html>
