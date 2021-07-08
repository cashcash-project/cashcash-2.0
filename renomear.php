<?php
error_reporting(0);
session_start();


$_SESSION['checar'] = "cashcash";
$_SESSION['novo'] = "cashcash";


function listar2($path2){


if (strrpos($moverse2,'..')) {
  $moverse2 = str_replace('/..','',$moverse2);
  $moverse2 = substr($moverse2,0,strrpos($moverse2,'/'));
}

if($moverse2) $moverse2 = $moverse2."/";


$handle2=opendir($path2.$moverse2);

while ($file2 = readdir($handle2)) {
  if(is_dir($path2.$moverse2.$file2) && $file2 != ".") {
  if ($file2 == ".." && $moverse2 == "") {
 
  } else {



	$lista .= listar($path2.$file2."/");


  }
  } else if ($file2 != ".") {

if(preg_match("/./",$file2) AND !preg_match("/listar.php/",$file2) AND !preg_match("/carregar.php/",$file2) AND !preg_match("/.htaccess/",$file2)){



if(ereg($_SESSION['checar'],$file2)){

$arquivo = str_replace($_SESSION['checar'],$_SESSION['novo'],$file2);

rename($path2.$file2,$path2.$arquivo);

$lista .= 'Alterado - '. $path2.$file2. " -> ". $path2.$arquivo  ."<br>";

}






}
  }
}


return $lista;

}





function listar($path1){

$hoje = date('Y-m-d');




if (strrpos($moverse1,'..')) {
  $moverse1 = str_replace('/..','',$moverse1);
  $moverse1 = substr($moverse1,0,strrpos($moverse1,'/'));
}

if($moverse1) $moverse1 = $moverse1."/";


$handle1=opendir($path1.$moverse1);

while ($file1 = readdir($handle1)) {
  if(is_dir($path1.$moverse1.$file1) && $file1 != ".") {
  if ($file1 == ".." && $moverse1 == "") {
 
  } else {

	$lista .= listar2($path1.$file1."/");


  }
  } else if ($file1 != ".") {

if(preg_match("/./",$file1) AND !preg_match("/listar.php/",$file1) AND !preg_match("/carregar.php/",$file1) AND !preg_match("/.htaccess/",$file1)){




if(ereg($_SESSION['checar'],$file1)){


$arquivo = str_replace($_SESSION['checar'],$_SESSION['novo'],$file1);

rename($path1.$file1,$path1.$arquivo);

$lista .= 'Alterado - '. $path1.$file1. " -> ". $path1.$arquivo  ."<br>";

}






}
  }
}


return $lista;

}





$cont = 0;
$path = "./";

if (strrpos($moverse,'..')) {
  $moverse = str_replace('/..','',$moverse);
  $moverse = substr($moverse,0,strrpos($moverse,'/'));
}

if($moverse) $moverse = $moverse."/";


$handle=opendir($path.$moverse);

while ($file = readdir($handle)) {
  if(is_dir($path.$moverse.$file) && $file != ".") {
  if ($file == ".." && $moverse == "") {
 
  } else {



	echo listar($file."/");



  }
  } else if ($file != ".") {

if(preg_match("/./",$file) AND !preg_match("/listar.php/",$file) AND !preg_match("/carregar.php/",$file) AND !preg_match("/.htaccess/",$file)){




if(ereg($_SESSION['checar'],$file)){

$arquivo = str_replace($_SESSION['checar'],$_SESSION['novo'],$file);

rename($file,$arquivo);

$lista .= 'Alterado - '. $path.$file. " -> ". $path.$arquivo  ."<br>";

}






}
  }
}

?>
