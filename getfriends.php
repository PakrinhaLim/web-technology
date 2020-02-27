<?php include 'connections/myfriends.php';

$sql = "SELECT *
FROM friends WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $title, $fname, $lname, $address, $bdate);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "</tr>"; echo "<tr>";

echo "<th>Title</th>";
echo "<td>" . $title . "</td>";
echo "</tr>"; echo "<tr>";

echo "<th>First Name</th>";
echo "<td>" . $fname . "</td>";
echo "</tr>"; echo "<tr>";

echo "<th>Last Name</th>";
echo "<td>" . $lname . "</td>";
echo "</tr>"; echo "<tr>";

echo "<th>Address</th>";
echo "<td>" . $address . "</td>";
echo "</tr>"; echo "<tr>";

echo "<th>Birth Date</th>";
echo "<td>" . $bdate . "</td>";
echo "</tr>"; echo "<tr>";
echo "</table>";
?>