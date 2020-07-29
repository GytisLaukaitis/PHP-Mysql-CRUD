<?php  include "db.php";?>
<?php  include "functions.php";?>
<?php deleteRows();?>
<!-- Delete form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete</h1>
        <form action="delete.php" method="post">
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
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                           showAllDAta();
                        ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
            </form>
        </div>
        <?php include "includes/footer.php";?>