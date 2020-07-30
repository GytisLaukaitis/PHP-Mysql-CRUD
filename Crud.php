<?php include "db.php";?>
<?php include "includes/header.php";?>
<header style="background-color: #FF4E02;">

  <nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#"><strong>Project manager</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Names <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
      </ul>
    </div>
  </nav>

</header>
<table class="table table-hover table-dark" style="margin: 0;">
<thead>
  <tr>
    <th style= "width: 25%"; scope="col">Id<form  style = "display: inline-block"; action="read.php" method="">
    <input class="btn btn-primary ml-4" type="submit" name="submit" value="Show info">
    </form></th>
    <th style= "width: 25%"; scope="col">Name </th>
    <th style= "width: 25%"; scope="col">Project</th>
    <th style= "width: 25%"; scope="col">Action<form  style = "display: inline-block"; action="create.php" method="">
    <input class="btn btn-primary ml-4" type="submit" name="submit" value="Create record">
    </form></th>
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
<footer class="page-footer font-small unique-color-dark"style="background-color: #FF4E02;"style=";">
  <div class="container" >
    <ul class="list-unstyled list-inline text-center py-2">
    </ul>
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> ProjectManager.com</a>
  </div>
</footer>
<?php include "includes/footer.php";?>
