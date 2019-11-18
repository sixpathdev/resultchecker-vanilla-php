<?php
require("../include/header.php");
include("../include/sidebar.php");
?>
<div class="col-lg-10">
<div class="container">
<div class="row mt-2">
<div class="col-lg-7">
<form>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Matric Number</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno">
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Department</label>
<div class="col-sm-7">
<select id="session" class="form-control">
<option selected>Select Department</option>
<option value="computer-science">Computer science</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Course code</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno">
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Semester</label>
<div class="col-sm-7">
<select id="session" class="form-control">
<option selected>Semester</option>
<option value="first-semester">1st Semester</option>
<option value="second-semester">2nd Semester</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">C.A Score</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno">
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Exam Score</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno">
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Total Score</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno" value="">
</div>
</div>
<div class="form-group row">
<label for="matno" class="col-lg-3 col-form-label">Grade</label>
<div class="col-sm-7">
<input type="text" class="form-control" id="matno" value="">
</div>
</div>
<button type="submit" class="btn btn-success offset-lg-8">Submit</button>
</form>
</div>
</div>
</div>
</div>