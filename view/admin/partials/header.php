<!DOCTYPE html>
<html lang="gl" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo $_SESSION['public'] ?>css/admin.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <!-- logo -->
            <a href="<?php echo $_SESSION['home'] ?>" class="brand-logo" title="Inicio">
                <img src="<?php echo $_SESSION['public'] ?>img/logo.svg" alt="Logotipo">
            </a>

            <?php if (isset($_SESSION['usuario'])) { ?>

                <!-- botón menú móbiles -->
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                <!-- menú navegación -->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a>
                    </li>
                    <?php if ($_SESSION['noticias'] == 1) { ?>
                        <li>
                            <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Noticias">Noticias</a>
                        </li>
                    <?php } ?>
                    <?php if ($_SESSION['usuarios'] == 1) { ?>
                        <li>
                            <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Usuarios">Usuarios</a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo $_SESSION['home'] ?>admin/salir" title="salir">Salir</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>

    <?php if (isset($_SESSION['usuario'])) { ?>

        <!-- menú de navegación móbil -->
        <ul class="sidenav" id="mobile-demo">
            <li>
                <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a>
            </li>
            <?php if ($_SESSION['noticias'] == 1) { ?>
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Noticias">Noticias</a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['usuarios'] == 1) { ?>
                <li>
                    <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Usuarios">Usuarios</a>
                </li>
            <?php } ?>
            <li>
                <a href="<?php echo $_SESSION['home'] ?>admin/salir" title="Salir">Salir</a>
            </li>
        </ul>

    <?php } ?>

    <?php if (isset($_SESSION['mensaje'])) { ?>

        <input type="hidden" name="tipo-mensaje" value="<?php echo $_SESSION["mensaje"]['tipo'] ?>">
        <input type="hidden" name="texto-mensaje" value="<?php echo $_SESSION["mensaje"]['texto'] ?>">

        <!-- Borro mensaxes -->
        <?php unset($_SESSION["mensaje"]) ?>

    <?php } ?>
    <main>
        <header>
            <h1>Panel de administración</h1>
            <?php if (isset($_SESSION['usuario'])) { ?>
                <h2>Usuario: <strong><?php echo $_SESSION['usuario'] ?></strong></h2>
            <?php } else { ?>
                <h2>Bienvenido, introduce usuario y contraseña.</h2>
            <?php } ?>
        </header>

        <section class="container-fluid">