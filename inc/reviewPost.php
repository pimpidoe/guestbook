<?php
include 'connection.php';
$sql ="SELECT * FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
echo "<table><tr><th>firstname</th><th>lastname</th><th>email</th><th>date</th><th>review</th></tr>";
// output data of each row
  echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . strftime("%d-%I-%Y \n %X", $row["date"]). "</td><td>" . $row["review"]. "</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
?>
