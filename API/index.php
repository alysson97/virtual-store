<?php
#permite que outras URL's sejam utilizadas para acessar essa rota
header('Access-Controll-Allow-Origin: *');
#define os dados retornados como JSON
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

if(isset($_GET['path'])){
  $path = explode("/",$_GET['path']);
}else{
  echo "Caminho não existe"; exit;
}

if(isset($path[0])){$api = $path[0];}else{echo "Caminho não existe"; exit;}
if(isset($path[1])){$acao = $path[1];}else{$acao = '';}
if(isset($path[2])){$param = $path[2];}else{$param = '';}

$method = $_SERVER['REQUEST_METHOD'];

include_once "classes/db.class.php";
include_once "itens/get.php";