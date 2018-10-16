<?php
//header("Refresh:1");
date_default_timezone_set('Europe/Vilnius');
$title = 'PHP lydes ir ryt '.date('Y-m-d', strtotime("next day"));
$h1 = 'Vytautas - PHP su manim buvo ir '.date('H', strtotime("-1 hour")).' valanda!';
$paragraph = date('Y', strtotime("next year")).' ne uz kalnu';

$html = '<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>'.$title.'</title>
</head>
<body>
<h1>'.$h1.'</h1>
<p>'.$paragraph.'</p>
</body>';
die ($html);
?>