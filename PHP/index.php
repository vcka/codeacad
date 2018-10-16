<?php

//header("Refresh:1");
date_default_timezone_set('Europe/Vilnius');
$data =  date('Y-m-d  H:i:s');
$m = date('m');
$d = date('d');
$title = 'As, '.date(D).' ir PHP';
$h1 = 'Vytautas - HTML ir PHP jau nuo '. date('Y').' metu';
$tommorow = date('Y-m-d', strtotime("next day"));

$html = '<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>PHP lydes ir ryt '.$tommorow.'</title>
</head>
<body>
<h1>'.$h1.'</h1>
<p>Viskas prasidejo '.$m.' meneso ' .$d.' diena!</p>
</body>';
die ($html);
?>