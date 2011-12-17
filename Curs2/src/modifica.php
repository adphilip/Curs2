<?php
include_once 'connectare.php';


if (!empty($_POST['submit'])) {
	echo "if branch <br />";
	//$sqlInsert = 'INSERT into flori(floare,varsta) values("'.$_POST['floare'].'","'.$_POST['age'].'");';
	//mysql_query($sqlInsert) or die(mysql_error());
	
	$sqlUpdate = 'UPDATE flori SET floare="'.$_POST['floare'].'", varsta="'.$_POST['age'].'" where id="'.$_POST['idModificat'].'";';
	mysql_query($sqlUpdate) or die(mysql_error());
	//header('Location:flori.php');
}
else {
	$idModificat = $_GET['id2'];
	//echo "id-ul de modificat: ". $idModificat ."<br />";
	
?>
	<form method="post" action="modifica.php">
	<table>
	<tr>
		<td>Floare:</td>
		<td><input type="text" name="floare" value="Narcisa"></td>
	</tr>
	<tr>
		<td>Varsta:</td>
		<td><input type="text" name="age" value="100"></td>
	</tr>
	
	<tr> <td><input type="hidden" name="idModificat" value="<?php echo $idModificat;?>"></td></tr>
	
	<tr>
		<td><input type="submit" name="submit" value="Modifica"></td>
	</tr>
	</table>
	</form>
	
<?php 
}

echo "<br /> Finish Modifica <br />";

?>