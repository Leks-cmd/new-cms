<!DOCTYPE html>
<html lang="gl" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias de Harry Potter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo $_SESSION['public'] ?>css/app.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <!-- logo -->
            <a href="<?php echo $_SESSION['home'] ?>" class="brand-logo" title="Inicio">
                <img src="<?php echo $_SESSION['public'] ?>img/logo.svg" alt="Logotipo">
            </a>

            <!-- botón menú móbiles -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <!-- menú navegación -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>" title="Inicio">Inicio</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>noticias" title="Noticias">Noticias</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>contacto" title="Contacto">Contacto</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>acerca-de" title="Acerca de">Acerca de</a>
                </li>
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>admin" title="Administración" target="_blank" class="grey-text">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- menú de navegación móbil -->
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="<?php echo $_SESSION['home'] ?>" title="Inicio">Inicio</a>
        </li>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>noticias" title="Noticias">Noticias</a>
        </li>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>contacto" title="Contacto">Contacto</a>
        </li>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>acerca-de" title="Acerca de">Acerca de</a>
        </li>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>admin" title="Administración" target="_blank" class="grey-text">Admin</a>
        </li>
    </ul>

    <main>
        <header>
            <h1>Primo CMS</h1>
            <h2>con POO, MVC, PHP e MySQL</h2>
        </header>

        <section class="container-fluid">