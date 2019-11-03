<?php 
//arquivos e dependencias que serão chamados
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new \Slim\Slim();

$app->config('debug', true);
//chamada de rota dos arquivos
$app->get('/', function() {
	
	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>