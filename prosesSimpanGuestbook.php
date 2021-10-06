<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="center">

        <?php

        $inputnamaGuest = $_POST['inputnamaGuest'];
        $inputalamatGuest = $_POST['inputalamatGuest'];
        $inputemailGuest = $_POST['inputemailGuest'];
        $inputstatusGuest = $_POST['inputstatusGuest'];
        $inputkomentarGuest = $_POST['inputkomentarGuest'];
        $fp = fopen("guestbook.txt", "w");
        $text = "$inputnamaGuest|$inputalamatGuest|$inputemailGuest|$inputstatusGuest|$inputkomentarGuest\n";
        fwrite($fp, $text);
        fclose($fp);

        ?>

        Terimakasih Atas Partisipasi Anda Mengisi Buku Tamu

        <a href="Pretest1_tampilanguestbook.html">Buku Tamu</a>
        <a href="isiguestbook.php">Dafatar Tamu</a>
    </div>

</body>

</html>