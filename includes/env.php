<?php

// Carga las variables de includes/.env (formato CLAVE=valor) en $_ENV.
// Cargador mínimo para no añadir dependencias al proyecto.
function cargarEnv(string $ruta) : void {
    if (!is_readable($ruta)) {
        exit('Falta includes/.env: copia includes/.env.example y rellénalo.');
    }

    foreach (file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $linea) {
        $linea = trim($linea);
        if ($linea === '' || str_starts_with($linea, '#') || !str_contains($linea, '=')) {
            continue;
        }
        [$clave, $valor] = array_map('trim', explode('=', $linea, 2));
        $_ENV[$clave] = trim($valor, "\"'");
    }
}
