<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 10-9-2018
 * Time: 9:17
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>IDK</title>
    <style>
        body {
            text-align: center;
        }
    </style>
<body>
<?php
    for ($i = 0; $i <= 50; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "*<br>";
    }
?>
</body>
</html>