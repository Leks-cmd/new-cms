<h3>
    <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a> <span>| Noticias</span>
</h3>

<div class="row">
    <article class="col s12 l6">
        <div class="card horizontal admin">
            <div class="card-stacked">
                <div class="card-content">
                    <i class="material-icons grey-text medium">image</i>
                    <h4 class="grey-text">Nova Noticia</h4><br><br>
                </div>
                <div class="card-action">
                    <a href="<?php echo $_SESSION['home'] . 'admin/noticias/crear' ?>" title="Engadir nova noticia"><i class="material-icons" title="Engadir noticia">add_circle</i></a>
                </div>
            </div>
        </div>
    </article>

    <?php foreach ($datos as $row) { ?>
        <article class="col s12 l6">
            <div class="card horizontal sticky-action admin">
                <div class="card-stacked">
                    <?php if ($row->imagen) { ?>
                        <div class="card-image">
                            <img src="<?php echo $_SESSION['public'] . "img/" . $row->imagen ?>" alt="<?php echo $row->titulo ?>">
                        </div>
                    <?php } ?>
                    <div class="card-content">
                        <?php if ($row->imagen) { ?>
                            <i class="material-icons medium grey-text"></i>
                        <?php } ?>
                        <h4><?php echo $row->titulo ?></h4>
                        <strong>URL amigable: </strong> <?php echo $row->slug ?><br>
                        <strong>Fecha: </strong> <?php echo $row->fecha ? date("d/m/Y", strtotime($row->fecha)) : 'Sin fecha'; ?>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo $_SESSION['home'] . 'admin/noticias/editar/' . $row->id ?>" title="Editar">
                            <i class="material-icons">edit</i>
                        </a>
                        <?php $title = ($row->activo == 1) ? "Desactivar" : "Activar" ?>
                        <?php $color = ($row->activo == 1) ? "green-text" : "red-text" ?>
                        <?php $icono = ($row->activo == 1) ? "mood" : "mood_bad" ?>

                        <a href="<?php echo $_SESSION['home'] . 'admin/noticias/activar/' . $row->id ?>" title="<?php echo $title ?>"><i class="material-icons <?php echo $color ?>"><?php echo $icono ?></i></a>
                        <?php $title = ($row->home == 1) ? "Quitar do inicio" : "Mostrar no inicio" ?>
                        <?php $color = ($row->home == 1) ? "green-text" : "red-text" ?>
                        <a href="<?php echo $_SESSION['home'] . 'admin/noticias/home/' . $row->id ?>" title="<?php echo $title ?>">
                            <i class="material-icons <?php echo $color ?>">home</i>
                        </a>
                        <a href="#" class="activator" title="Borrar"><i class="material-icons">delete</i></a>

                    </div>
                </div>
                <!-- Confirmación de borrado -->
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Borrar noticia <i class="material-icons right">close</i></span>

                    <p>Estás seguro de que queres eliminar definitivamente ao noticia<strong> <?php echo $row->titulo ?> </strong>?<br>
                        Esta acción non se pode desfacer!</p>

                    <a href="<?php echo $_SESSION['home'] . 'admin/noticias/borrar/' . $row->id; ?>" title="Borrar">
                        <button class="btn waves-effects waves-light" type="button">Borrar
                            <i class="material-icons right">delete</i>
                        </button>
                    </a>
                </div>
            </div>
        </article>
    <?php } ?>
</div>