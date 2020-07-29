<?php  include "db.php";?>
<?php  include "functions.php";?>
<?php updateTable();?>
<!-- Update form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
        <form action="update.php" method="post">
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
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form>
        </div>
        <?php include "includes/footer.php";?>