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
                width: 1200px;
                height: 900px;
                margin: 0 auto;
                background-color: #f4f0ed;
                display: block;
            }
            .pavadinimas{
                display: block;
            }
            .kaina{
                display: block;
            }
            .aprasymas{
                display: block;
            }
            .nuolaida{
                display: block;
            }
        </style>
    </head>
    <body>
<?php foreach ($catalog as $value): ?>
            <div class="produktas">

                <span class="pavadinimas"><?php print $value[pavadinimas]; ?></span>
                <span class="kaina"><?php print $value[kaina]; ?></span>
                <span class="aprasymas"><?php print $value[aprasymas]; ?>.</span>
                <span class="nuolaida"><?php print $value[nuolaida]; ?></span>

            </div>
<?php endforeach; ?>
    </body>
</html>

