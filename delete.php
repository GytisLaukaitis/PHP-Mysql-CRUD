<?php  include "db.php";?>
<?php  include "functions.php";?>
<?php deleteRows();?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete</h1>
        <form action="delete.php" method="post">
        <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" name="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="distance">Distance</label>
                    <input type="text" name="distance" class="form-control">
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" name="time" class="form-control">
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