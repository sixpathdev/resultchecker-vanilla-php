<?php
require('../include/topnav.php');
include('../include/sidebar.php');
?>

<div class="col-10">
    <div class="col-12">
        <h4 class="text-center py-3">Select Semester to display</h4>
        <hr>
    </div>
    <form action="getAllResult.php" method="GET">
        <button type="submit" name="first" value="first" class="btn bg-custom my-2 text-white px-3 ml-4">First Semester</button>
        <button type="submit" name="second" value="second" class="btn bg-custom my-2 text-white px-3 ml-5">Second Semester</button>
    </form>
</div>