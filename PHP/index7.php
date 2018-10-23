<?php



$keistas_array = [

    'masina' => 'Toyota Prius',

    'miestai' => ['Minsk', 'Vilnius', 'Ryga', 'Nahui'],

    'daiktai' => [

        'mano' => 'Sofa',

        'tavo' => 'Lova'

    ]

];



function loopArray($array) {

    $text = '';

    // Loops through each element. If element again is array, function is recalled. If not, result is echoed.

    foreach ($array as $key => $value) {

        if (!empty($text)) {

            $text .= ', ';

        }

        if (is_array($value)) {

            $text .= loopArray($value);

        } else {

            $text .= $key . ": " . $value;

        }

    }

    

    return $text;

}



print loopArray($keistas_array);

?>