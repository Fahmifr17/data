<?php
$koneksi = mysqli_connect("localhost","root","","ppdb_online");
if (mysqli_connect_errno()) {
	echo "koneksi database gagal :". mysqli_connect_error();
}
?> 

