<?php

//conectare baza de date
include_once 'connectare.php';



if (!empty($_POST['submit'])) {
	echo "if branch <br />";
	$sqlInsert = 'INSERT into flori(floare,varsta) values("'.$_POST['floare'].'","'.$_POST['age'].'");';
	mysql_query($sqlInsert) or die(mysql_error());
}
else {
?>
	<form method="post" action="adauga.php">
	<table>
	<tr>
		<td>Floare:</td>
		<td><input type="text" name="floare"></td>
	</tr>
	<tr>
		<td>Varsta:</td>
		<td><input type="text" name="age"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Adauga"></td>
	</tr>
	</table>
	</form>
	
<?php 
}

echo "<br /> Finish Adauga <br />";
?>