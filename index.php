<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
Router::get('/ponta-grossa', 'CasosController@relatorioDiariosPG');
Router::get('/estados', 'CasosController@relatorioCasosEstados');
Router::get('/estados/{estado}', 'CasosController@filtraCasosPorEstado');

Router::start();