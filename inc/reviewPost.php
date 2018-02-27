<?php
$sql ="SELECT * FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table><tr><th>firstname</th><th>lastname</th><th>email</th><th>review</th><th>date</th></tr>";
// output data of each row
while ($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . strftime("%d-%I-%Y \n %X", $row["date"]). "</td><td>" . $row["review"]. "</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
} ?>
