<?php

date_default_timezone_set('Europe/Vilnius');
$data =  date('Y-m-d  H:i:s');

$html = '<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
   <title>HW-CA</title>
</head>

<body>
    <h1>Vytautas - HTML asas!</h1>
    <p>Moku sukurti statini turini. Atidaryta '.$data.'</p>
</body>';
echo $html;
?>