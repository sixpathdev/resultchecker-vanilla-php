<?php
require("../include/topnav.php");
include("../include/sidebar.php");
?>

<div class="col-10">
<div class="col-12">
<h6 class="text-center py-3">Welcome to the student result checker portal for computer science department!</h6>
<hr>
<div class="col-sm-7 offset-lg-1">
<form method="POST" action="../result.php">
<div class="form-group row">
<label for="matno" class="col-sm-4 col-form-label">Matric Number</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno" placeholder="PHP/N/COM/2017/2000">
</div>
</div>
<div class="form-group row">
<label for="semester" class="col-sm-4 col-form-label">Session</label>
<div class="col-sm-7">
<select id="session" name="session" class="form-control">
<option selected>Select Session</option>
<option value="2017">2017/2018</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="semester" class="col-sm-4 col-form-label">Semester</label>
<div class="col-sm-7">
<select id="semester" class="form-control">
<option selected>Select Semester</option>
<option value="first">1st semester</option>
<option value="second">2nd semester</option>
</select>
</div>
</div>
<button type="submit" name="submit" class="btn btn-success offset-sm-9">Submit</button>
</form>
</div>

</div>
</div>