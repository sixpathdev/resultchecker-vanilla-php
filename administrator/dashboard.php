<?php
require("../include/topnav.php");
// $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'
include("../include/sidebar.php");
if (!$_SESSION["loggedin"] == true) {
    header("location: index.php");
}
?>
<div class="col-lg-10">
    <div class="col-lg-12 my-3">
        <?php
        if ($_SESSION['status']) {
            echo $_SESSION['status'];
            $_SESSION['status'] = '';
        }
        ?>
        <h3 class="text-gray">Dashboard <i class="fas fa-tachometer-alt"></i></h3>

    </div>
    <div class="col-lg-6 list-group">
        <div class="list-group-item list-group-item-action active bg-custom">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-2 bg-white p-2">
                    <a href="./megaupload.php" class="text-decoration-none text-custom">Upload Csv Result</a>
                </h5>
            </div>
            <p class="mb-1 text-white">
                Upload the result in a .csv file. This uploads all students' results to the database at once.
                </small>
        </div>
    </div>

    <div class="col-lg-6 list-group float-right mb-2">
        <div class="list-group-item list-group-item-action bg-primary">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-2 bg-white p-2">
                    <a href="../forms/checkResult.php" class="text-decoration-none text-custom">Check Result</a>
                </h5>
            </div>
            <p class="mb-1 text-white">
                Check a student's result
                </small>
        </div>
    </div>

    <!-- <div class="col-lg-6 offset-lg-1 list-group">
        <div class="list-group-item list-group-item-action bg-info">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-2 bg-white p-2">
                    <a href="" class="text-decoration-none text-primary">Check Result</a>
                </h5>
            </div>
            <p class="mb-1 text-white">
                Check a student's result
                </small>
        </div>
    </div> -->
</div>
<?php include("../include/footer2.php"); ?>