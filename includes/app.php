<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conectamos a la base de datos
$db = conectarDB();
use Model\ActiveRecord;

ActiveRecord::setDB($db);