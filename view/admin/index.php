<h3>Bienvenido a su sitema de control de contenidos</h3>

<div>
    <ul>
        <?php if ($_SESSION['noticias'] == 1) { ?>
            <li>
                <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Noticias">
                    <h4>Noticias</h4>
                </a>
            </li>
        <?php } ?>
        <?php if ($_SESSION['usuarios'] == 1) { ?>
            <li>
                <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Usuarios">
                    <h4>Usuarios</h4>
                </a>
            </li>
        <?php } ?>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>admin/salir" title="Saír">
                <button type="button" class="btn waves-effect waves-light">Salir <i class="material-icons right">logout</i></button>
            </a>
        </li>
    </ul>
</div>