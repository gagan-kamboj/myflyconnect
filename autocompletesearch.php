<?php
include('.admin/inc/function.php');
$leavingfrom = $_GET['Arival_airport'];
$sql = "select Arival_airport from  trip_details where 	Arival_airport like '%".$leavingfrom."%' limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["Arival_airport"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>