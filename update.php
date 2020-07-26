<?php  include "db.php";?>
<?php  include "functions.php";?>
<?php updateTable();?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
        <form action="update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
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