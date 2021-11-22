<?php
//include database connection file
include_once("../koneksi.php");

//Get id from url to delete that user
$nim = $_GET['nim'];

//Delete user row from table based on given id
$result = mysqli_query($con, "delete from mahasiswa WHERE nim='$nim'");

//After delete redirect to home, so that latest user list will be displayed
header("Location:index.php");
