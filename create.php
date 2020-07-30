<?php include "db.php";?>
<?php include "functions.php";?>
<?php createRows();?>
<!-- Create row form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class = "text-center">Create</h1>
            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="date">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Surname</label>
                    <input type="text" name="surname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="distance">Age</label>
                    <input type="text" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label for="time">Project</label>
                    <input type="text" name="project" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" <?php dirname($_SERVER['REQUEST_URI'], 1) ?> name="submit" value="CREATE">
            </form>
        </div>
 <?php include "includes/footer.php";?>