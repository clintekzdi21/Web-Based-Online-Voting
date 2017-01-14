<?php

$expiration = "Select current_date+5 date";
$results = pg_query($expiration);
$arr=pg_fetch_array($results);

echo $arr;

?>