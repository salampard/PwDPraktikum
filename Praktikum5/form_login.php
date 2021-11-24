<?php
echo
"<h2>Login</h2>
<form action=cek_login.php method=post>
<table>
<tr><td>Username</td><td>: <input type='text' name='id_user'></td></tr>
<tr><td>Password</td><td>: <input type='password' name='paswd'></td></tr>
<tr>
<td>Captcha<br>
<img src='../praktikum6/captcha.php' /></td>
<td>:<input name='captcha_code' type='text'></td>
</tr>
<tr><td colspan=2></td><td><input type='submit' value='login'></td></tr>
</table>
</form>";
