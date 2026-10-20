<?php

require 'funciones.php';
require 'env.php';
cargarEnv(__DIR__ . '/.env');
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conectamos a la base de datos
$db = conectarDB();
use Model\ActiveRecord;

ActiveRecord::setDB($db);