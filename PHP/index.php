<?php
header("Refresh:1");
//$dice = rand(1, 6);
$dice = rand(1, 6).'.png';$html = '<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>'.$title.'</title>
</head>
<body>
<div style="height:600px; width: 55%; background-image: url('.$dice.'); background-repeat: no-repeat; margin:0 auto;">
</body>';
die ($html);
?>