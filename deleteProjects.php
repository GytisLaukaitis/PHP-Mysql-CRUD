<?php  include "db.php";?>
<?php  include "projectFunctions.php";?>
<?php deleteProjectRows();?>
<!-- Delete form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete project by choosing it's ID</h1>
        <form action="deleteProjects.php" method="post">
        <div class="form-group">
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