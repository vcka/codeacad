<?php
header("Refresh:1");
//VLN laiko juosta
date_default_timezone_set('Europe/Vilnius');
/*Ir visa
 * Kita matematika
 */
$vaikai = rand(1, 5);
$random = rand(strtotime("Oct 16 2018"), strtotime("Oct 16 2028"));
$random2 = rand(strtotime("Oct 16 2021"), strtotime("Oct 16 2121"));
$title = 'PHP lydes ir '.date('Y-m-d',$random);
$h1 = 'Vytautas - Galbut turesiu '.$vaikai.' vaiku!';
$paragraph = 'D. Trump`as nebus prezidentu '.date('Y-m-d',$random2);
$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);
$f = rand(1, 100);

$html = '<!DOCTYPE html>
<!--Pagrindine nesamone
<p>Nieko nera</p>
-->
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>'.$title.'</title>
</head>
<body style="background:rgb('.$r.','.$g.','.$b.')">
<h1 style="font-size:'.$f.'px">'.$h1.'</h1>
<p style="color: rgb('.$b.','.$g.','.$r.')">'.$paragraph.'</p>
</body>';
die ($html);
?>