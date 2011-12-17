<?php

$x;
echo "x e setata:".isset($x)."<br />";
echo "x e goala:".empty($x)."<br /> <br />";
$y = 345;
echo "y e setata:".isset($y)."<br />";
echo "y e goala:".empty($y)."<br />";
echo "y e setata:".isset($y)."<br />";
//type juggling
$z = FALSE;
echo "type bool: ".is_bool($z)."<br />";
$z = 1;
echo "type int: ".is_int($z)."<br />";
$z += "344 fasfdas";
echo "valoarea: ".$z."<br />";
echo "type int: ".is_int($z)."<br />";

?>