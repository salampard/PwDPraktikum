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

        <?php $fp = fopen("guestbook.txt", "r"); ?>
        <table>

            <?php while ($isi = fgets($fp, 80)) {

                $pisah = explode("|", $isi);
            ?>

                <tr>
                    <td>Nama :</td>
                    <td><?= $pisah[0]; ?></td>
                </tr>

                <tr>
                    <td>Alamat :</td>
                    <td><?= $pisah[1]; ?></td>
                </tr>

                <tr>
                    <td>Email :</td>
                    <td><?= $pisah[2]; ?></td>
                </tr>

                <tr>
                    <td>Status :</td>
                    <td><?= $pisah[3]; ?></td>
                </tr>

                <tr>
                    <td>Komentar :</td>
                    <td><?= $pisah[4]; ?></td>
                </tr>

            <?php }; ?>

        </table>

        <div style="margin-top: 1rem;">
            <a href="Pretest1_tampilanguestbook.html">Buku Tamu</a>
        </div>

    </div>
</body>

</html>