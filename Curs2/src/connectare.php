<?php

/**
 * Connectare server
 */
//mysql_connect('localhost','root') or die(mysql_error());
mysql_connect('127.0.0.1:3306','root') or die(mysql_error());


//selectare Baza de date
mysql_select_db('Curs2') or die (mysql_error());


echo "Finish connectare <br />";

?>