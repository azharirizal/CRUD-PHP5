<?php
include "../../conf/conn.php";

$id = $_GET['id'];

$query = ("DELETE FROM mahasiswa WHERE id_mahasiswa ='$id'");

if(!mysql_query($query)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Berhasil Dihapus !!!");
				window.location.href="../../index.php?page=data_mahasiswa"</script>';	
	}
?>
