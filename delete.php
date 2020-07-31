<?php  include "db.php";?>
<?php  include "functions.php";?>
<?php deleteRows();?>
<!-- Delete form -->
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete row from names by choosing ID</h1>
        <form action="delete.php" method="post">
        <div class="form-group">
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