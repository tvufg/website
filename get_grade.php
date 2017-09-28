<?php

require_once('db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$data = $_POST['getDia'];
$grade = array();

$sql = " SELECT id FROM dia WHERE data =  $data ";
$resultado = mysqli_query($link, $sql);
$registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

$dia = $registro['id'];
$sql = " SELECT fk_programa FROM dia_programa WHERE fk_dia = $dia ORDER BY hora ";
$resultado = mysqli_query($link, $sql);

if (!$resultado) {
  die();
}

date_default_timezone_set('America/Sao_Paulo');

while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
  $pg = $registro['fk_programa'];
  $sql = " SELECT * FROM programa WHERE id = $pg ";
  $re = mysqli_query($link, $sql);
  $reg = mysqli_fetch_array($re, MYSQLI_ASSOC);
  $programa = array('titulo' => $reg['titulo'], 'hora' => $reg['hora'], 'descricao' => $reg['descricao']);
  $pgJSON = json_encode($programa);
  array_push($grade, $pgJSON);
}

$gradeJSON = json_encode($grade);
echo($gradeJSON);
?>
