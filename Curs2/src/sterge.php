<?php
include_once 'connectare.php';

if (isset($_GET['id2'])) {
	echo "Get e seatat: ".$_GET['id2']."<br />";
	
	$selectStergere = 'DELETE from flori where id='.$_GET['id2'].';';
	mysql_query($selectStergere) or die(mysql_error());
}
//header must be at begging

header('Location: flori.php');

?>