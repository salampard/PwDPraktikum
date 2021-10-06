<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $filecounter = "counter.txt";
    $fl = fopen($filecounter, "r+");
    $hit = fread($fl, filesize($filecounter));


    ?>

    <div class="center" style="height: 100vh;">
        <h1>Anda adalah pengunjung yang ke <?= $hit; ?></h1>
    </div>

    <?php
    fclose($fl);

    $fl = fopen($filecounter, "w+");
    $hit = $hit + 1;
    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
    ?>



</body>

</html>