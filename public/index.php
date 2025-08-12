<?php

namespace App;

// Inicio de sesión para poder traspasar variables entre paxinas
session_start();

// Incluir controladores
use App\Controller\AppController;
use App\Controller\NoticiaController;
use App\Controller\UsuarioController;

// Asignar sesión as rutas das carpetas public e home
$_SESSION['public'] = '/';
$_SESSION['home'] = $_SESSION['public'] . 'index.php/';

// Chamar a función de autocarga de clases (controladores, modelos, vistas ...)
spl_autoload_register('App\autoload');

function autoload($clase, $dir = null)
{

    // directorio raíz do proxecto
    if (is_null($dir)) {
        $dirname = str_replace('\public', '', dirname(__FILE__));
        $dir = realpath($dirname);
    }

    // Escaneo de busca recursiva
    foreach (scandir($dir) as $file) {

        // Si é un directorio
        if (is_dir($dir . "/" . $file) and substr($file, 0, 1) !== '.') {
            autoload($clase, $dir . "/" . $file);
        } else if (is_file($dir . "/" . $file) and $file == substr(strrchr($clase, "\\"), 1) . ".php") {
            require($dir . "/" . $file);
        }
    }
}

// Invocar controlador en cada ruta
function controller($nombre = null)
{
    switch ($nombre) {
        default:
            return new AppController;
        case "noticias":
            return new NoticiaController;
        case "usuarios":
            return new UsuarioController;
    }
}

// Rutas
$ruta = str_replace($_SESSION['home'], '', $_SERVER['REQUEST_URI']);

// Encamiñar cada ruta ao controlador e acción correspondente
switch ($ruta) {
    // Front-end
    case "":
    case "/":
        controller()->index();
        break;
    case "contacto":
        controller()->contacto();
        break;
    case "acerca-de":
        controller()->acercade();
        break;
    case "noticias":
        controller()->noticias();
        break;
    case (strpos($ruta, "noticia/") === 0):
        controller()->noticia(str_replace("noticia/", "", $ruta));
        break;

    // Back-end
    case "admin":
    case "admin/entrar":
        controller("usuarios")->entrar();
        break;
    case "admin/salir":
        controller("usuarios")->salir();
        break;

    // Usuarios URL
    case "admin/usuarios":
        controller("usuarios")->index();
        break;
    case "admin/usuarios/crear":
        controller("usuarios")->crear();
        break;
    case (strpos($ruta, "admin/usuarios/editar/") === 0):
        controller("usuarios")->editar(str_replace("admin/usuarios/editar/", "", $ruta));
        break;
    case (strpos($ruta, "admin/usuarios/activar/") === 0):
        controller("usuarios")->activar(str_replace("admin/usuarios/activar/", "", $ruta));
        break;
    case (strpos($ruta, "admin/usuarios/borrar/") === 0):
        controller("usuarios")->borrar(str_replace("admin/usuarios/borrar/", "", $ruta));
        break;

    // Noticias URL
    case "admin/noticias":
        controller("noticias")->index();
        break;
    case "admin/noticias/crear":
        controller("noticias")->crear();
        break;
    case (strpos($ruta, "admin/noticias/editar/") === 0):
        controller("noticias")->editar(str_replace("admin/noticias/editar/", "", $ruta));
        break;
    case (strpos($ruta, "admin/noticias/activar/") === 0):
        controller("noticias")->activar(str_replace("admin/noticias/activar/", "", $ruta));
        break;
    case (strpos($ruta, "admin/noticias/home/") === 0):
        controller("noticias")->home(str_replace("admin/noticias/home/", "", $ruta));
        break;
    case (strpos($ruta, "admin/noticias/borrar/") === 0):
        controller("noticias")->borrar(str_replace("admin/noticias/borrar/", "", $ruta));
        break;

    case (strpos($ruta, "admin/") === 0):
        controller("usuarios")->entrar();
        break;

    // Resto de rutas 
    default:
        controller()->index();
}
