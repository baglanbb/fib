<?php 

function getFib($n)
{
	include '../db.php';
	


	$query = $connection->query("SELECT * FROM fibnumbers WHERE number= '$n'");
	if ($query->num_rows > 0) {
		while ($row = $query->fetch_object()) {
			$result = $row->answer;
		}
	}
	if (!isset($result)) {
	   	$result = round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
	   	$connection->query("INSERT INTO fibnumbers (id,number,answer) VALUES(NULL, '$n', '$result')");
	}
    return $result;
}


if (isset($_POST['number'])) {
	$number = $_POST['number'];
	echo getFib($number);
}


	
?>