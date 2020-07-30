<?php  include "db.php";?>
<?php  include "projectFunctions.php";?>
<?php deleteRows();?>
<!-- Delete form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete</h1>
        <form action="deleteProjects.php" method="post">
        <div class="form-group">
                    <label for="date">Project name</label>
                    <input type="text" name="Project_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Deadline</label>
                    <input type="text" name="Deadline" class="form-control">
                </div>
                    <select name="id" id="">
                        <?php
                           showAllProjectDAta();
                        ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
            </form>
        </div>
        <?php include "includes/footer.php";?>