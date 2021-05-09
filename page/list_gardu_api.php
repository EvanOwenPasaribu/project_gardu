<?php

$conn = mysqli_connect('localhost', 'root', '', 'demo');
mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT * FROM locations');
while($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
			
$json = json_encode($data);
echo $json;

?>