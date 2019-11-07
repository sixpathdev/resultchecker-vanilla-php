<?php
session_start();
require('../include/header.php');
include("../include/footer.php");

if ($_SESSION["loggedin"] == true) {
    header("location: dashboard.php");
}
?>

<div class="container">
    <div class="row mt-2">
        <div class="col-12 text-center">
            <p class="text-warning bg-white">* Only a registered admin is authorized to login.</p>
        </div>
        <div class="col-12 text-center h5 my-3">Admin login</div>
        <div class="col-sm-5 offset-lg-3">
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username" value="<?php echo $_POST['username']; ?>">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">

                </div>
                <button type="submit" name="submit" class="btn bg-custom text-white">Login</button>
            </form>
        </div>
    </div>
</div>