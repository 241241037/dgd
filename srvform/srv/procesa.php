<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$respuestaUsuario = recuperaTexto("respuesta");

$adivinanzaCorrecta = "esponja"; // Respuesta correcta

if (strtolower(trim($respuestaUsuario)) === $adivinanzaCorrecta) {
    $resultado = "¡Correcto! La respuesta es esponja.";
} else {
    $resultado = "Incorrecto. La respuesta correcta es esponja.";
}

devuelveJson(["resultado" => $resultado]);
