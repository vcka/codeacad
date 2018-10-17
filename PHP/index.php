<?php

//header("Refresh:1");
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
  <title>HW-CA</title>
  <style>
    #circle {
      width: 50px;
      height: 50px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 25px;
      background: red;
    } 
    #square {
  height: 50px;
  width: 50px;
  background-color: #555;
}
</style>

</head>

<body>
<div id="'.$style.'">'.$sec.'</div>
</body>';
die($html);
?>