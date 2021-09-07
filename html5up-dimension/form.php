<?php
include_once('getcustomer.php');
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
//logins etc forms pdos db queries in style
?>

<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Subscribe!" action="">
  </div>
</form>