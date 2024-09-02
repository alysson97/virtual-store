<?php

if($api == 'items'){
  if($method == "GET"){

    $db = DB::connect();
    if($acao == 'filter' && $param != ''){ 
      $rs = $db->prepare("SELECT * FROM produtos WHERE id={$param}");
      $rs->execute();
      $obj = $rs->fetchObject();
    }else{
      $rs = $db->prepare("SELECT * FROM produtos ORDER BY name");
      $rs->execute();
      $obj = $rs->fetchAll(PDO::FETCH_ASSOC);
    }
    if($obj)
      echo json_encode(["data" => $obj]);
  }
}