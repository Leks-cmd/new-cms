<?php

function limparDatos($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Array para erros
$erros = [];

// Validar cada campo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nome
    if (empty($_POST["nome"])) {
        $erros["nome"] = "O nome é obrigatorio 😣";
    } else {
        $nome = limparDatos($_POST["nome"]);
        if (strlen($nome) < 2) {
            $erros["nome"] = "O nome debe ter polo menos 2 caracteres 🤓";
        }
    }

    // Apelidos
    if (empty($_POST["apelidos"])) {
        $erros["apelidos"] = "O apelidos son obrigatorios 😣";
    } else {
        $apelidos = limparDatos($_POST["apelidos"]);
    }

    // Email
    if (empty($_POST["email"])) {
        $erros["email"] = "O email é obrigatorio 😣";
    } else {
        $email = limparDatos($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros["email"] = "Introduce un email válido 🤬";
        }
    }

    // Nivel de estudos
    if (empty($_POST["estudos"])) {
        $erros["estudos"] = "Selecciona un nivel de estudos 😣";
    } else {
        $estudos = limparDatos($_POST["estudos"]);
    }

    // Resumo
    if (empty($_POST["resumo"])) {
        $erros["resumo"] = "O resumo é obrigatorio 😣";
    } else {
        $resumo = limparDatos($_POST["resumo"]);
        if (strlen($resumo) < 50) {
            $erros["resumo"] = "O resumo debe ter alo menos 50 caracteres 🤬";
        }
    }

    // Se non hay erros procesanse os datos
    if (empty($erros)) {
        // Gardar os datos nunha base de datos, enviar un email ...

        // Mostrar os datos
        echo "<h1>Solicitude recibida correctamente:</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Apelidos:</strong> $apelidos</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Estudos:</strong> $estudos</p>";
        echo "<p><strong>Resumo:</strong>" . nl2br($resumo) . "</p>";

        exit();
    } /*else {
        // 
    }*/
}
?>