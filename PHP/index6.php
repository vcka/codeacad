<?php

$baisusArray['London'] = ['Capital'=>'London', 'Population'=>40000000, 'NationalSport'=>'Cricket'];
$baisusArray['Vilnius'] = ['Capital'=>'Vilnius', 'Population'=>300000, 'NationalSport'=>'Basketball'];
$baisusArray['Moscow'] = ['Capital'=>'Moscow', 'Population'=>100000000, 'NationalSport'=> 
    ['mano' => 'Sofa', 'tavo' => [
                                  'mano' => 'Sofa', 'tavo' => 
                                                             ['Capital'=>'Vilnius', 'Population'=>300000, 'NationalSport'=>'Basketball']

    ]

    ]];

function array_values_recursive($array) {
  $flat = [];

  foreach($array as $value) {
    if (is_array($value)) {
        $flat = array_merge($flat, array_values_recursive($value));
    }
    else {
        $flat[] = $value;
    }
  }
  return $flat;
}

print (implode(", ",array_values_recursive($baisusArray)));
?>