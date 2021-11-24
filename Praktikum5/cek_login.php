<?php

session_start();
include "../koneksi.php";
$id_user = $_POST['id_user'];
$pass = md5($_POST['paswd']);
$sql = "select * from users where id_user = '$id_user' and password = '$pass'";

if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    $login = mysqli_query($con, $sql);

    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_assoc($login);

    if ($ketemu > 0) {

        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];

        echo "User Berhasil Login<br>";
        echo "id user =", $_SESSION['iduser'], "<br>";
        echo "password user =", $_SESSION['passuser'], "<br>";
        echo "<center><a href=logout.php> <b>LOGOUT<b> </a></center>";
    } else {
        echo "<center>Login gagal! username dan password tidak benar<br>";
        echo "<a href=form_login.php><b>Ulangi Lagi</b></a></center>";
    }

    mysqli_close($con);
} else {
    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    echo "<a href=form_login.php><b>Ulangi Lagi</b></a></center>";
}
