<?php include "db.php";?>
<?php include "includes/header.php";?>

<table class="table table-hover table-dark">
<thead>
  <tr>
    <th style= "width: 25%"; scope="col">Id</th>
    <th style= "width: 25%"; scope="col">Name </th>
    <th style= "width: 25%"; scope="col">Project</th>
    <th style= "width: 25%"; scope="col">Action</th>
  </tr>
</thead>
<tbody>
  <!-- Insert DB rows to php form -->
  <?php 
  global $connection;
  $query = "SELECT id,name,project FROM users";
  $result = mysqli_query($connection, $query);
  if (!$result) {
      die('Query FAILED' . mysqli_error($connection));
  }
   while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'. $row['id'] .'</td>';
    echo '<td>'. $row['name'] .'</td>';
    echo '<td>'. $row['project'] .'</td>';
    // update / delete buttons forms
    print ( '
    <td><form  style = "display: inline-block"; action="update.php" method="">
    <input class="btn btn-primary ml-4" type="submit" name="submit" value="UPDATE">
    </form>
    <form style = "display: inline-block"; action="delete.php" method="">
    <input class="btn btn-primary ml-4" type="submit" name="submit" value="DELETE">
    </form></td>');
    echo '</tr>';
  }
  ?>
</tbody>
</table>






<?php include "includes/footer.php";?>
