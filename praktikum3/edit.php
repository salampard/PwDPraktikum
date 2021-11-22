<?php
include_once("../koneksi.php");

if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];

    //update user data
    $result = mysqli_query($con, "UPDATE mahasiswa SET nama='$nama', jkel='$jkel', alamat='$alamat', tgllhr='$tgllhr' where nim='$nim'");

    //Redirect to homepage to display updated user in list
    header("location:index.php");
}

//Display selected user data based on id
//Getting id from url
$nim = $_GET['nim'];

//fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa where nim='$nim'");

while ($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <a href="index.php">Home</a><br> <br>

    <form action="edit.php" name="update_mahasiswa" method="post">
        <table border="0">
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <input type="text" name="nama" value="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <input type="text" name="jkel" value="<?= $jkel; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" value="<?= $alamat; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Lahir
                </td>
                <td>
                    <input type="text" name="tgllhr" value="<?= $tgllhr; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="nim" value="<?= $_GET['nim']; ?>">
                </td>
                <td>
                    <input type="submit" name="update" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>