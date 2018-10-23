<?php
$catalog = [
    [
        'pavadinimas' => 'Nokio 1610',
        'kaina' => '1eur',
        'aprasymas' => 'Pats geriausias ragelis',
        'nuolaida' => 1
    ],
    [
        'pavadinimas' => 'Samsung le40d550',
        'kaina' => '800eur',
        'aprasymas' => 'Pats geriausias telikas',
        'nuolaida' => 33
    ],
    [
        'pavadinimas' => 'AEG skalbepati',
        'kaina' => '500eur',
        'aprasymas' => 'Pati geriausia skalbenke',
        'nuolaida' => 16
    ]
        ]
?>

<html>
    <head>
        <style>
            .produktas {
                text-align: center;
                width: 200px;
                height: 200px;
                margin: 0 auto;
                background-color: #f4f0ed;
                display: block;
                border: 1px solid black;
            }
            .pavadinimas{
                display: block;
                font-size: 40px;
            }
            .kaina{
                display: block;
                font-size: 18px;
                color: red;
            }
            .aprasymas{
                display: block;
                font-size: 26px;
            }
            .nuolaida{
                display: block;
                font-size: 18px;
                color: #f31919;
            }
        </style>
    </head>
    <body>
<?php foreach ($catalog as $value): ?>
            <div class="produktas">
                <span class="pavadinimas"><?php print $value[pavadinimas]; ?></span>
                <span class="kaina"><?php print $value[kaina]; ?></span>
                <span class="aprasymas"><?php print $value[aprasymas]; ?>.</span>
                <span class="nuolaida"><?php print "$value[nuolaida] %"; ?></span>
            </div>
<?php endforeach; ?>
    </body>
</html>

