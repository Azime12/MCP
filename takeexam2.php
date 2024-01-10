<?php
session_start();

if ($_SESSION["sidx"] == "" || $_SESSION["sidx"] == NULL) {
	header('Location:studentlogin');
}
$userid = $_SESSION["sidx"];
$userfname = $_SESSION["fname"];
$userlname = $_SESSION["lname"];
?>
<?php include('studenthead.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h3> Welcome <a href="welcomestudent"><?php echo "<span style='color:red'>" . $userfname . " " . $userlname . "</span>"; ?></a></h3>
			<?php
			$varid = $_GET['id'];
			include('database.php');
			$sql = "select * from  studenttable where Eid='$userid'";
			$sql2 = "select * from  exam where Eid='$userid'";
			$result = mysqli_query($connect, $sql);

	$row = mysqli_fetch_array($result);
			?>
				<!--exam question with student detalis-->
				<fieldset>
					<legend>Exam Details</legend>
					<form action="" method="POST" name="update">
						<div class="col-md-4">
							<table>
								<tr>
									<td><strong>Enrolment number :</strong>
									</td>
									<td>
										<?php $eno = $row['Eno'];
										echo $eno; ?>
									</td>
								</tr>
								<tr>
									<td><strong>Name :</strong>
									</td>
									<td>
										<?php $name = $row['FName'] . " " . $row['LName'];
										echo $name; ?>
									</td>
								</tr>
							</table>
						</div>

						<div class="col-md-4">
							<table>
								<tr>
									<td><strong>Course :</strong>
									</td>
									<td>
										<?PHP $cc = $row['Course'];
										echo $cc; ?>
									</td>
								</tr>
								<tr>
									<td><strong>Applied For :</strong>
									</td>
									<td>
										<?PHP echo $varid; ?><br>
									</td>
								</tr>
							</table>
						</div>
						<br>
						<br>
						<hr>
						<div class="col-md-12">
							<span style="color: red;">
								<h3>You Can take English EUEE </h3>
							</span>

							<br>
							<div>
								<h4> <strong>1. Which one of the following lines is most likely taken from an informal letter?</strong></h4>
								</br><label class="radio-inline">
									<input type="radio" name="q1" value="o1" required>&nbsp; We have received a letter of your complaints about the service you ....
									</br></label>



								</br><label class="radio-inline">
									<input type="radio" name="q1" value="o2">I am writing this letter to invite you to my birthday party which will be ...
								</label>






								</br><label class="radio-inline">
									<input type="radio" name="q1" value="o3">We had booked a table for six but when we arrived, there was no free< </label>
										</br><label class="radio-inline">
											<input type="radio" name="q1" value="o3">In the first place, I requested you to book me a room by the view of the sea....

										</label>






							</div>

							<br>
							<br>
							<div>
								<h4> <strong>2. Which one of the following is a possible closing salutation to an informal letter?

									</strong></h4>
								</br><label class="radio-inline">
									<input type="radio" name="q2" value="o1" required> Yours truly.
								</label>






								</br> <label class="radio-inline">
									<input type="radio" name="q2" value="o2"> Regards
								</label>


								</br><label class="radio-inline">
									<input type="radio" name="q2" value="o3"> Take care.
								</label>
								</br><label class="radio-inline">
									<input type="radio" name="q2" value="o3"> Sincerely.
								</label>



							</div>

							<br>
							<br>
							<div>
								<h4> <strong>3. In an informal letter, which one of the following comes following the date?</strong></h4>
								</br><label class="radio-inline">
									<input type="radio" name="q3" value="o1" required> Receiver's address

								</label>




								</br><label class="radio-inline">
									<input type="radio" name="q3" value="o2">Body
								</label>



								</br><label class="radio-inline">
									<input type="radio" name="q3" value="o3"> Receiver's name
								</label>
								</br><label class="radio-inline">
									<input type="radio" name="q3" value="o3">Opening
									<br>
								</label>


							</div>

							<br>
							<br>
							<div>
								<h4> <strong>4. Hussein: What do you mean by 'education is not financially rewarding?</br>
										Bilal:________________________________</strong></h4>
								</br> <label class="radio-inline">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="o1" required> I am saying that doing a degree is materially and physically demanding. Okay?
								</label>



								</br><label class="radio-inline">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="o2"> You know, there are so many people who haven't had any job for ten or so years

									</br><label class="radio-inline">
										<input type="radio" name="q4" value="o3"> What I'm trying to say is that most well-educated people are economically poor.

									</label>
									</br><label class="radio-inline">
									<input type="radio" name="q4" value="o3"> Come on. Imagine the number of years it takes to get a master's or a PhD. degree.

									</label>



							</div>
							<br>
							<br>
							<div>
								<h4> <strong>5. Melkam: Do we need to send delegates and try to convince them?
										<br>Belay:____________________________________</strong></h4>
								</br><label class="radio-inline">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="o1" required> Well, as far as I can see, there is no point in doing that. Just ignore them.
								</label>



								</br><label class="radio-inline">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="o2"> Convincing someone needs some kind of special skill. Doesn't it?

									</br><label class="radio-inline">
									<input type="radio" name="q5" value="o3"> Who are they making all this trouble? They don't like to see us change
									</label>
									</br><label class="radio-inline">
									<input type="radio" name="q5" value="o3"> We have been friends for generations. Why do they forget that?

									</label>


							</div>
							<br><br>
							<button type="submit" name="done" class="btn btn-primary" id ="done">I am Done!</button>
						</div>
					</form>
				</fieldset>
			<?php
			
			if (isset($_POST['done'])) {

				
				echo  "<script>document.getElementById[ 'done' ].style.visibilty:hidden; </script>";
					echo "<br>
					<br>
					<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Now You can check your answers.</strong><br>
					1. A&nbsp;&nbsp;&nbsp;2.c&nbsp;&nbsp;&nbsp;3.D&nbsp;&nbsp;&nbsp;4.B&nbsp;&nbsp;&nbsp;5.D
					</div>";
				} 
			?>
		</div>
	</div>
	<?php include('allfoot.php'); ?>