<?php

$hour = rand(0, 23);

$month = rand(1, 12); //1-12

$output = NULL;


if($month>=3&&$month<=5){
    $m_laikas = 'Pavasario';
}elseif($month>=6&&$month<=8){
    $m_laikas = 'Vasaros';
}elseif($month>=9&&$month<=11){
    $m_laikas = 'Rudens';
}else{
    $m_laikas = 'Ziemos';
}

if ($hour>=5&&$hour<=9){
    $paros_metas = 'rytas';
}elseif($hour>9&&$hour<=19){
    $paros_metas = 'diena';
}elseif($hour>19&&$hour<=23){
    $paros_metas = 'vakaras';
}else{
    $paros_metas = 'naktis';
}

$output = "$month mėn, $hour val.: $m_laikas $paros_metas";
print ($output);

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
 
  <title>HW-CA</title>
</head>
<body>

</body>
</html>