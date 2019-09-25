<?php
require_once('System/Init.php');
$db = Database::Connection();

//$userId = $_GET['userID'];

$gateId = $_GET['gateID'];

$gateParts = json_decode($db->query('SELECT parts FROM player_galaxygates2 WHERE gateId = '.$gateId.' AND userId = '.$Player->Data['userID'].'')->fetch()['parts']);

$img = count($gateParts) >= 1 ? 'gate'.$gateId.'/gate_'.$gateId.'_'.end($gateParts).'.png' : 'empty.png';
$dest = imagecreatefrompng('./Assets/Img/GalaxyGateParts/'.$img.'');

if ($_GET['type'] == 'full') {
  foreach ($gateParts as $part) {
    if (end($gateParts) != $part) {
      $src = imagecreatefrompng('./Assets/Img/GalaxyGateParts/gate'.$gateId.'/gate_'.$gateId.'_'.$part.'.png');
      imagecopyresized($dest, $src, 0, 0, 0, 0, imagesx($dest), imagesy($dest), imagesx($dest), imagesy($dest));
      imagedestroy($src);
    }
  }
}

imagesavealpha($dest, true);
imagealphablending($dest, false);

header('Content-Type: image/png');

imagepng($dest);
imagedestroy($dest);
?>
