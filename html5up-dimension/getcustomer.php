<html>
<!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
$mysqli = new mysqli("localhost", "root", "", "customers");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, name, passwd, email FROM customers WHERE id = 1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $email, $passwd);
$stmt->fetch();
$stmt->close();
//INSERT MY PDOS HERE

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>email</th>";
echo "<td>" . $email . "</td>";
echo "<th>pass</th>";
echo "<td>" . $passwd . "</td>";
echo "</tr>";
echo "</table>";
?>

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</html>