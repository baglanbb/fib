<?php 
include '../db.php';

$action=$_POST["action"];
if($action=="showroom"){
	$query = $connection->query("SELECT * FROM fibnumbers ORDER BY number");
	if ($query->num_rows > 0) {
		while ($row = $query->fetch_object()) {
			echo "<tr>";
			echo "<td>".$row->number."</td>";
			echo "<td>".$row->answer."</td>";
			echo "</tr>";

		}
	}
}