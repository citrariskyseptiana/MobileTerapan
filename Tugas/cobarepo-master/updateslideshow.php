<?php

include("config.php");

$judul_slideshow = $_POST['judul_slideshow'];
$url_slideshow = $_POST['url_slideshow'];
 
$sql = "UPDATE slideshow SET judul_slideshow='$judul_slideshow', url_slideshow='$url_slideshow' WHERE id_identitas=19";
$query = mysqli_query($db, $sql);

// apakah query update berhasil?
if( $query ) {

} else {
	die("Gagal menyimpan perubahan . . .");
}

?>