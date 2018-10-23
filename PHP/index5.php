<?php
$fridge = ['kebabas' => 2.50, 'alus'=>1.89, 'burokai'=>1.50,];
$capitalcities[] = ['Capital'=>'London', 'Population'=>40000000, 'NationalSport'=>'Cricket', 'NationalSport2'=>'Cricket'];


function loopArray($array)
{
    $array_keys = array_keys($array);
    $last_key = end($array_keys);
    $atsakymas = '';
    // Loops through each element. If element again is array, function is recalled. If not, result is echoed.
    foreach ($array as $key => $value)
    {	//Tikrina ar masyvo narys yra masyvas/jai taip suka cikla is naujo paeje vienu zingsniu gilyn
        if (is_array($value))
        {   //Va cia negaliu paaiskint ;]
            $atsakymas .= loopArray($value);
        }else{//Kitaip iraso $key ir $value i stringa.
              $atsakymas .= $key . ": " . $value;
			//Tikrina ar tai paskutinis masyvo indeksas, jai ne i stringa iraso kableli.
			if ($key == $last_key){
                          }else{
	                        $atsakymas .= ', ';
        	               }

             }
    }
return $atsakymas;
}
//var_dump (loopArray($capitalcities));
?>
<html>
<body>
<h1>Masyvo turinys:</h1>
<p><?php print loopArray($capitalcities);?></p>
</body>
</html>

