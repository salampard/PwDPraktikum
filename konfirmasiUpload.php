<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Upload</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $lokasi_file = $_FILES['inputFileUploadname']['tmp_name'];
    $nama_file = $_FILES['inputFileUploadname']['name'];
    $deskripsi_file = $_POST['inputDeskripsiFilename'];

    $direktori = "c:/xampp/htdocs/kuliah/Praktikum/$nama_file";
    ?>


    <div class="center">
        <?php if (move_uploaded_file($lokasi_file, $direktori)) { ?>

            <h4>Nama File : <?= $nama_file; ?> Berhasil diupload</h4>
            <h5>Deskripsi File : <?= $deskripsi_file; ?></h5>

        <?php } else echo "File Gagal diupload"; ?>
    </div>

</body>

</html>