<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$userlname = $_SESSION[ "lname" ];
?>
<?php include('studenthead.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<!--Student will select the exam-->
			<h3> Welcome <a href="welcomestudent"><?php echo "<span style='color:red'>".$userfname." ".$userlname."</span>";?></a></h3>
			<label for="Exam"><h4>Select Exam:</h4></label>
			<div><a href="takeexam2.php"><input type="submit" value="English" name="PHP" class="btn btn-primary" ></a>
			<a href="takeexam3.php"><input type="submit" value="Maths" name="PHP" class="btn btn-primary" ></a>
			<a href="takeexam4.php"><input type="submit" value="Physics" name="PHP" class="btn btn-primary"></a>
			<a href="takeexam5.php"><input type="submit" value="Biology" name="PHP" class="btn btn-primary"></a>
			<a href="takeexam6.php"><input type="submit" value="Chemistry" name="PHP" class="btn btn-primary"></a>
			<a href="takeexam7.php"><input type="submit" value="Civics" name="dotnet" class="btn btn-primary"></a>
			</div>
		</div>
	</div>
<?php include('allfoot.php'); ?>