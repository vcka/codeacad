<?php
$fridge = [ 'kebabas' => 2.50,
            'alus'=>1.89,
            'burokai'=>1.50,
        ];




?>
<html>
    <body>
        <?php foreach ($fridge as $key => $value): ?>
        <div class="<?php print ($key)?>">
        <?php print ($value)?>
        </div>
        <?php        endforeach;?>
    </body>
</html>