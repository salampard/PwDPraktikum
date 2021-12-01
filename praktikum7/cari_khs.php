<?php include '../koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Form Pencarian KHS Mahasiswa Dengan PHP</h3>

    <form action="" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="cari">
    </form>

    <?php if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        echo "<b>Hasil Pencarian : " . $cari . "</b>";
    } ?>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Kode MK</th>
            <th>Nilai</th>
        </tr>
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $sql = "select * from khs where nim = $cari ";
            $tampil = mysqli_query($con, $sql);
        } else {
            $sql = "select * from khs";
            $tampil = mysqli_query($con, $sql);
        }
        $no = 1;
        while ($r = mysqli_fetch_array($tampil)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $r['nim']; ?></td>
                <td><?= $r['kodeMK']; ?></td>
                <td><?= $r['nilai']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>