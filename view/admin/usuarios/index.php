<h3>
    <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a> <span>| Usuarios</span>
</h3>

<?php error_reporting(E_ALL); ?>

<div class="row">
    <article class="col s12 l6">
        <div class="card horizontal admin">
            <div class="card-stacked">
                <div class="card-content">
                    <i class="material-icons grey-text medium">person</i>
                    <h4 class="grey-text">Novo Usuario</h4><br><br>
                </div>
                <div class="card-action">
                    <a href="<?php echo $_SESSION['home'] . 'admin/usuarios/crear' ?>" title="Engadir novo usuario"><i class="material-icons" title="Engadir novo usuario">add_circle</i></a>
                </div>
            </div>
        </div>
    </article>

    <?php foreach ($datos as $row) { ?>
        <article class="col s12 l6">
            <div class="card horizontal sticky-action admin">
                <div class="card-stacked">
                    <div class="card-content">
                        <i class="material-icons medium">person</i>
                        <h4>
                            <?php echo $row->usuario ?>
                        </h4>
                        <strong>Usuarios: </strong><?php echo ($row->usuarios) ? "Si" : "Non"; ?>
                        <strong>Noticias: </strong><?php echo ($row->noticias) ? "Si" : "Non"; ?>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo $_SESSION['home'] . 'admin/usuarios/editar/' . $row->id ?>" title="Editar usuario"><i class="material-icons" title="Editar usuario">edit</i></a>

                        <?php $title = ($row->activo == 1) ? "Desactivar" : "Activar" ?>
                        <?php $color = ($row->activo == 1) ? "green-text" : "red-text" ?>
                        <?php $icono = ($row->activo == 1) ? "mood" : "mood_bad" ?>

                        <a href="<?php echo $_SESSION['home'] . 'admin/usuarios/activar/' . $row->id ?>" title="<?php echo $title ?>"><i class="material-icons <?php echo $color ?>"><?php echo $icono ?></i></a>

                        <a href="#" class="activator" title="Borrar"><i class="material-icons">delete</i></a>
                    </div>
                </div>
                <!-- Confirmación de borrado -->
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Borrar usuario <i class="material-icons right">close</i></span>

                    <p>Estás seguro de que queres eliminar definitivamente ao usuario? <strong><?php echo $row->usuario; ?></strong>
                        Esta acción non se pode desfacer!</p>

                    <a href="<?php echo $_SESSION['home'] . 'admin/usuarios/borrar/' . $row->id; ?>" title="Borrar">
                        <button class="btn waves-effect waves-light" type="button">Borrar
                            <i class="material-icons right">delete</i>
                        </button>
                    </a>
                </div>
        </article>
    <?php } ?>
</div>