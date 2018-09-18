<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 7-9-2018
 * Time: 8:53
 */
?>

<!DOCTYPE html>
<html>
<head>
<title>Loops</title>
    <style>
        body {
            text-align: center;
        }

        .rood {
            border: red solid 5px;
        }

        .green {
            border: lime solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='green'";
    }
    printf("<img ".$class." src='pictures/sniperz/sniper". $i .".jpg'>");
}
?>
</body>
</html>
