<?php
if (isset($_POST['keliam'])){
    $kvadratas = ($_POST['keliam'])**2;
}
print $kvadratas;
?>

<html>
    <head>

    </head>
    <body>
        <form action="index10.php" method="POST">Ka pakelti kvadratu:<input name="keliam" type="text"/><input type="submit"/></form>
    </body>
</html>