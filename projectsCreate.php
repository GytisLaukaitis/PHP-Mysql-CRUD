<?php include "db.php";?>
<?php include "projectFunctions.php";?>
<?php createProjectRows();?>
<!-- Create project row form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class = "text-center">Create</h1>
            <form action="projectsCreate.php" method="post">
                <div class="form-group">
                    <label for="date">Project name</label>
                    <input type="text" name="Project_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Deadline</label>
                    <input type="text" name="Deadline" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Names</label>
                    <input type="text" name="Names" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit"  name="submit" value="CREATE">
                </div>
            </form>
        </div>
 <?php include "includes/footer.php";?>