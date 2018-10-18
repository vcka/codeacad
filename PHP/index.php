<?php

header("Refresh:1");
$sec = date('s');
$id = '';
if (is_int($sec / 2)) {
    //print("Lyginis: $sec");
    $id = 'square';
} else {
    //print("Nelyginis: $sec");
    $id = 'circle';
}
$html = '<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>EXTRA</title>
  <style>
    #circle {
    margin: 50px auto;
    width: 500px;
    height: 500px;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    background: red;
    text-align: center;
    } 
    #square {
    margin: 50px auto;
    height: 500px;
    width: 500px;
    background-color: #555;
    text-align: center;
    }
</style>

</head>

<body>
<div id="'.$id.'">'.$sec.'</div>
</body>';
die($html);
?>