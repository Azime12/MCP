<?php
session_start();

if ( $_SESSION[ "umail" ] == "" || $_SESSION[ "umail" ] == NULL ) {
	header( 'Location:AdminLogin.php' );
}

$userid = $_SESSION[ "umail" ];
?>
<?php include('adminhead.php'); ?>
<div class="container">
	<div class="row">
		<?php
		include( "database.php" );
		if ( isset( $_REQUEST[ 'deleteid' ] ) ) {
			$deleteid = $_GET[ 'deleteid' ];
			//below will delete a particular student
			$sql = "DELETE FROM `studenttable` WHERE Eno = $deleteid";
			if ( mysqli_query( $connect, $sql ) ) {
				echo "
<br><br>
<div class='alert alert-success fade in'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Success!</strong> Student details deleted.
</div>
";
			} else {
				echo "<br><Strong>Student Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $connect );
			}
		}
		mysqli_close( $connect );
		?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- <h3 class="page-header">Welcome <a href="welcomeadmin">Admin</a> </h3> -->
			<?php
			include( "database.php" );
			$sql = "select * from  studenttable";
			$result = mysqli_query( $connect, $sql );
			echo "<h2 class='page-header'>Student Details</h2>";
			//below will print all student details to admin
			echo "<table class='table table-striped' style='width:100%'>
<tr>
<th>Studet ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Father Name</th>
<th>Address</th>
<th>Gender</th>
<th>Course</th>
<th>DOB</th>
<th>Phone Number</th>
<th>Email</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>		
</tr>";
			while ( $row = mysqli_fetch_array( $result ) ) {
				?>

			<tr>
				<td>
					<?PHP echo $row['Eno'];?>
				</td>
				<td>
					<?PHP echo $row['FName'];?>
				</td>
				<td>
					<?PHP echo $row['LName'];?>
				</td>
				<td>
					<?PHP echo $row['FaName'];?>
				</td>
				<td>
					<?PHP echo $row['Addrs'];?>
				</td>
				<td>
					<?PHP echo $row['Gender'];?>
				</td>
				<td>
					<?PHP echo $row['Course'];?>
				</td>
				<td>
					<?PHP echo $row['DOB'];?>
				</td>
				<td>
					<?PHP echo $row['PhNo'];?>
				</td>
				<td>
					<?PHP echo $row['Eid'];?>
				</td>
				<td>
					<?PHP echo $row['Pass'];?>
				</td>
				<td><a href="updatestudent.php?eno=<?php echo $row['Eno']; ?>"><input type="button" Value="Edit" class="btn btn-info btn-sm"></a>
				</td>
				
<td>
  <button class='btn btn-info btn-sm' data-toggle="modal" data-target="#confirmDeleteModal" data-studentid="<?php echo $row['Eno']; ?>">Delete</button>
</td>

			</tr>
			<?php } ?>

			</table>
			<a style="font-size: 2em;" href="#" data-toggle="modal"  data-target="#addStudentModal"><button type="button" class="btn btn-info btn-sm">Add New Student</button></a>
		</div>

		<div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="addStudentModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Include your add student form here -->
        <?php include('addnewstudent.php'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Add this modal structure at the end of your HTML body -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this student?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="#" id="confirmDeleteButton" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

	</div>
	<!-- Add this script at the end of your HTML body -->
<script>
  $(document).ready(function () {
    $('#confirmDeleteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var studentId = button.data('studentid');
      var confirmDeleteButton = $('#confirmDeleteButton');
      confirmDeleteButton.attr('href', 'StudentDetails.php?deleteid=' + studentId);
    });
  });
</script>

	<?php include('allfoot.php'); ?>