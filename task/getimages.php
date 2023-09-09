<?php
$id=abs($_GET['id']);
$query = mysql_query("SELECT image FROM table1 WHERE id=$id");
$data=mysql_fetch_array($query);

header('Content-type: image/jpg');
echo $data['image'];
?>