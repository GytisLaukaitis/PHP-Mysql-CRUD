<?php  include "db.php";?>
<?php  include "projectFunctions.php";?>
<?php updateProjectTable();?>
<!-- Update form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
        <form action="updateProjects.php" method="post">
        <div class="form-group">
                    <label for="date">Project name</label>
                    <input type="text" name="Project_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Deadline</label>
                    <input type="text" name="Deadline" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                           showAllProjectDAta();
                        ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form>
        </div>
        <?php include "includes/footer.php";?>