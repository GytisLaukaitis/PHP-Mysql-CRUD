<?php  include "db.php";?>
<?php  include "projectFunctions.php";?>
<?php include "includes/header.php";?>
   <!-- Read from db form -->
    <div class="container">
        <div class="col-sm-6">
        <pre>
        <?php readProjectRows();?>
        </pre>
        </div>
        <?php include "includes/footer.php";?>