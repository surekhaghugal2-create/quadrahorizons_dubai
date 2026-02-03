<?php
include("../config/db.php");
$result = $conn->query("SELECT * FROM enquiries ORDER BY id DESC");
?>

<h2>Enquiries</h2>
<table border="1" cellpadding="10">
<tr>
  <th>Name</th>
  <th>Email</th>
  <th>Phone</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
  <td><?= $row['phone'] ?></td>
</tr>
<?php } ?>
</table>
