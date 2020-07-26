<?php include "db.php";?>
<?php include "functions.php";?>
<?php createRows();?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class = "text-center">Create</h1>
            <form action="create.php" method="post">
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
                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>
 <?php include "includes/footer.php";?>