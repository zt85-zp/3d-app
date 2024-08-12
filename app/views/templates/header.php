<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/home.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/model.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/x3dom.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/bootstrap.css">
</head>
<body>
    <div class="main-container">
        <header>
            <nav class="navbar navbar-expand-lg shadow-lg mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo LINKURL; ?>">
                        <div class="logo-container">
                            <div class="logo-background">
                                <div class="logo-subtitle d-lg-block d-xl-block d-none">Enjoy</div>
                                <div class="logo-title text-white">CocaCola</div>
                            </div>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="topbar">
                        <ul class="navbar-nav mx-auto gap-3">
                        <?php
                            $menuArray = array('Home', 'Models', 'About', 'Contact');

                            foreach ($menuArray as $menu) {
                                echo '<li class="nav-item">';
                                if ($data['title'] === $menu) {
                                    $className = 'opacity-100'; 
                                } else {
                                    $className = '';
                                }
                                echo "<a class='nav-link text-white fs-4 my-2 $className' href='" . LINKURL . "/".lcfirst($menu)."'>" . ucfirst($menu) . '</a>'; // Output the menu item link with the class name
                                echo '</li>';
                            }

                        ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>