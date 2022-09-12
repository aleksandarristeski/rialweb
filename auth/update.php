<?php 
require_once '../helfer.php';
if(isset($_POST['spalteName']) && isset($_POST['spalteWert']) && isset($_POST['produktId'])){
$db = new PDO('mysql:host=localhost;dbname=wbsprojekt_risteski','root','');
$db->query('SET NAMES utf8');

$spalteName = trim($_POST['spalteName']);
$spalteWert = trim($_POST['spalteWert']);
$produktId = trim($_POST['produktId']);

  $sql = 'UPDATE produkts SET '.$spalteName.' = ? WHERE produkt_id = ?';
  $st = $db->prepare($sql);
  $st->execute([$spalteWert, $produktId]);
} else {
  redirect('../index.php');
}
