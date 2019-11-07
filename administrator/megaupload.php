<?php
require("../include/topnav.php");
include("../include/sidebar.php");
if (!$_SESSION["loggedin"] == true) {
    header("location: index.php");
}

if (isset($_POST["uploadBtn"])) {
    $filename = $_FILES['myFile']['name'];
    $fileTmpName = $_FILES['myFile']['tmp_name'];
    //fiind ext of file
    $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
    //check the extension
    //echo $file_ext;
    //define allowed extensions
    $allowedTypes = array('csv');
    if (!in_array($file_ext, $allowedTypes)) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Invalid File Extension
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    } else {
        //upload your file
        $handle = fopen($fileTmpName, 'r'); //read mode 'r'
        while (($myData = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $matricNo = $myData[0];
            $com201 = $myData[1];
            $com214 = $myData[2];
            $com216 = $myData[3];
            $com224 = $myData[4];
            $com206 = $myData[5];
            $session = $myData[6];
            $semester = $myData[7];
            $department = $myData[8];

            $sql = "INSERT INTO results (matricNo, com201, com214, com216, com224, com206, session, semester, department) values (:matricNo, :com201, :com214, :com216, :com224, :com206, :session, :semester, :department)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':matricNo', $matricNo);
            $stmt->bindParam(':com201', $com201);
            $stmt->bindParam(':com214', $com214);
            $stmt->bindParam(':com216', $com216);
            $stmt->bindParam(':com224', $com224);
            $stmt->bindParam(':com206', $com206);
            $stmt->bindParam(':session', $session);
            $stmt->bindParam(':semester', $semester);
            $stmt->bindParam(':department', $department);

            if ($stmt->execute()) {
                $_SESSION['msg'] = "<div class='col-12 mt-2 text-center alert alert-success alert-dismissible fade show' role='alert'>Record created successfully<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
            } else {
                die("Error uploading csv file");
            }
        }
    }
}
?>

<div class="col-lg-10">
    <form action="" method="POST" enctype="multipart/form-data">
        <?php
        echo $_SESSION['msg'];
        $_SESSION['msg'] = '';
        ?>
        <h3 class="tez">Upload your File</h3>
        <h6>The uploaded file must be in Microsoft Excel csv format</h6>
        <hr />
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="file" name="myFile" class="form-control-file">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="submit" name="uploadBtn" class="btn text-white bg-custom">Upload</button>
                </div>
            </div>
        </div>
    </form>
</div>


<?php require("../include/footer2.php"); ?>