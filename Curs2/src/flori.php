<?php
include_once 'connectare.php';

//Afisam baza de date curs 2 / baza de date flori
$selectFlori = 'SELECT * from flori';

$resultSelectFlori = mysql_query($selectFlori) or die(mysql_error());
//print_r($resultSelectFlori);

//all rows
while ($resultFetch = mysql_fetch_assoc($resultSelectFlori)) {
	//print_r($resultFetch);
	echo " <br /> array ? = ".is_array($resultFetch)."<br /><br/>";

		?>
		<form>
		<table>
		<tr><td> Nume floare: <?php echo $resultFetch['floare'];?></td></tr>
		<tr><td> Varsta floare: <?php echo $resultFetch['varsta'];?></td></tr>
		</table>
		
		
		<a href="modifica.php?id2=<?php echo $resultFetch['id']; ?>&floare2=<?php echo $resultFetch['floare']; ?>">Modifica</a>
		<a href="sterge.php?id2=<?php echo $resultFetch['id']; ?>" onclick="return confirm( 'Esti sigur(a), sigur(a) ?' )">Sterge</a>
		</form>
		<?php 
	
	//foreach ($resultFetch as $key1 => $value1){
	//	echo "<br /> cheia: $key1 SI valoarea: $value1 <br />";
	
	//}	
	
	//insert one time
	//$sqlDemoInsert = 'INSERT into flori(floare, varsta) values("magiras","3")';
	//mysql_query($sqlDemoInsert) or die (mysql_error());
}

?>
		
	<a href="adauga.php">Adauga</a>
		
<?php 

echo "<br />Finish flori <br />";
?>