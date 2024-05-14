<?php
if (isset($_GET['id'])) {
	require("kapcsolat.php");
	$id = (int)$_GET['id'];
    $sql = "DELETE FROM `registration` WHERE id = '{$id}'";
	mysqli_query($dbc, $sql);
}
header("Location: admin.php");
?>