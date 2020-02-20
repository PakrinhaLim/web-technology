<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'connections/myfriends.php';
?>
<title>MySqlTest</title>
</head>



<body>
<form action="insertfri.php" method="post">
<table width="314" border="1">
  <tr>
    <th scope="row">Title</th>
    <td><input type="text" name="title"/></td>
  </tr>
  <tr>
    <th scope="row">First Name</th>
    <td><input type="text" name="fname"/></td>
  </tr>
  <tr>
    <th scope="row">Last Name :</th>
    <td><input type="text" name="lname"/></td>
  </tr>
  <tr>
    <th width="154" scope="row">Address : </th>
    <td width="144"><input type="text" name="address"/></td>
  </tr>
  <tr>
    <th width="154" scope="row">Bdate : </th>
    <td width="144"><input type="date" name="bdate"/></td>
  </tr>

</table><br />
<input type="submit" value="submit" name="submit"/>
</form>

<?php
$sql = "SELECT * FROM friends";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Fname: " . $row["title"] . " " . $row["fname"]. " " . $row["lname"]. " - address: " . $row["address"] . " - bdate: " . $row["bdate"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
