<?php

$dbconn = pg_connect("host=localhost port=5432 dbname=WB user=postgres password=masterkey21");
print_r($dbconn);
echo('Connected');
 //or die("Could not connect");
?>
