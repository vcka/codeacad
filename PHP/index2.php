<?php
//Generuojama paros valanda
$hour = rand(0, 23);

//Generuojamas metu menuo
$month = rand(1, 12); //1-12

//Galutinis rezultatas
$output = NULL;

//Pagal menesio numeri priskiama metu laiko reiksme -> $m_laikas
if ($month >= 3 && $month <= 5) {
    $m_laikas = 'Pavasario';
} elseif ($month >= 6 && $month <= 8) {
    $m_laikas = 'Vasaros';
} elseif ($month >= 9 && $month <= 11) {
    $m_laikas = 'Rudens';
} else {
    $m_laikas = 'Ziemos';
}

//Pagal paros valanda priskiriama paros meto reiksme -> $paros_metas
if ($hour >= 5 && $hour <= 9) {
    $paros_metas = 'rytas';
} elseif ($hour > 9 && $hour <= 19) {
    $paros_metas = 'diena';
} elseif ($hour > 19 && $hour <= 23) {
    $paros_metas = 'vakaras';
} else {
    $paros_metas = 'naktis';
}

//Paruosiama informacija isvedimui
$output = "$month mėn, $hour val.: $m_laikas $paros_metas";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <style>
            .Ziemos{
                position:relative;
                display: block;
                margin: 0 auto;
                width: 900px;
                height: 600px;
                background-image: url('https://static.vecteezy.com/system/resources/previews/000/098/145/non_2x/winter-snowflake-background-vector.jpg');
                z-index: -1;
            }

            .Pavasario{
                position:relative;
                display: block;
                margin: 0 auto;
                width: 900px;
                height: 600px;
                background-image: url('http://doanarae.com/doanarae/9118-spring-pictures-for-background.jpg');
                z-index: -1;
            }
            .Vasaros{
                position:relative;
                display: block;
                margin: 0 auto;
                width: 900px;
                height: 600px;
                background-image: url('https://www.desktopbackground.org/p/2013/01/07/510892_summer-background-images-hd-wallpapers-lovely_1280x1024_h.jpg');
                z-index: -1;
            }
            .Rudens{
                position:relative;
                display: block;
                margin: 0 auto;
                width: 900px;
                height: 600px;
                background-image: url('https://images.unsplash.com/photo-1441205400075-68a01d4c5108?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6ed912307d3d591565c440df7430a3b3&w=1000&q=80');
                z-index: -1;
            }

            .rytas div{
                background-color: rgba(0, 0, 0, 0.1);
                width: 100%;
                height: 100%;

            }

            .diena div{
                background-color: rgba(0, 0, 0, 0);
                width: 100%;
                height: 100%;
            }

            .vakaras div{
                background-color: rgba(0, 0, 0, 0.6);
                width: 100%;
                height: 100%;
            }

            .naktis div{
                background-color: rgba(0, 0, 0, 0.9);
                width: 100%;
                height: 100%;
            }
        </style>
        <title>EXTRA</title>
    </head>
    <body>
        <div class='<?php print "$m_laikas $paros_metas"; ?>'>
            <div></div>
        </div>
        <h1 align="center"><?php print ($output); ?></h1>  
    </body>
</html>