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
		<div class="col-md-12">

			<h3> Welcome <a href="welcomestudent"><?php echo "<span style='color:red'>".$userfname." ".$userlname."</span>";?></a></h3>
			<?php
			$varid = $_GET[ 'id' ];
			include( 'database.php' );
			$sql = "select * from  studenttable where Eid='$userid'";
			$sql2 = "select * from  exam where Eid='$userid'";
			$result = mysqli_query( $connect, $sql );

			 $row = mysqli_fetch_array( $result ) 
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
									<?php $eno=$row['Eno'];
						echo $eno; ?>
								</td>
							</tr>
							<tr>
								<td><strong>Name :</strong>
								</td>
								<td>
									<?php $name=$row['FName']." ".$row['LName'];
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
									<?PHP $cc=$row['Course'];
											echo $cc; ?>
								</td>
							</tr>
							<tr>
								<td><strong>Applied For :</strong>
								</td>
								<td>
									<?PHP echo $varid;?><br>
								</td>
							</tr>
						</table>
					</div>
					<br>
					<br>
					<hr>
					<div class="col-md-12">
						<span style="color: red;"><h3>You Can take Physics EUEE </h3></span>

						<br>
						<div>
							<h4> <strong>1.  A mass-spring system set to oscillate in a simple harmonic motion over friction less horizontal
surface. The amplitude of this oscillation is 20 cm. A second mass-spring system with the same spring
constant is set to oscillate in the same way but with amplitude of 10 cm. The energy of the
</strong></h4>
							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o1" required>&nbsp;  first mass-spring system has four times the second one.
							</br></label>
						


							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o2" >second mass-spring system has the square of the first one.
						





					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >first mass-spring system has twice the second one.
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >. second mass-spring system has half of the first one.

					</label>
						





						</div>

						<br>
						<br>
						<div>
							<h4> <strong>2 According to Gauss's law the net electric flux through any hypothetical closed surface is proportional
to the enclosed;


                                 </strong></h4>
								 </br><label class="radio-inline">
					<input type="radio" name="q2" value="o1" required > Electric field. 
					</label>
						





					</br>	<label class="radio-inline">
					<input type="radio" name="q2" value="o2" >  Electric current.
					</label>
						

					</br><label class="radio-inline">
							<input type="radio" name="q2" value="o3" > Electric charge
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q2" value="o3" > . Potential difference. 
					</label>
						


						</div>

						<br>
						<br>
						<div>
							<h4> <strong>3. Instantaneous velocity is different from average velocity in that; instantaneous velocity is
 </strong></h4>
							</br><label class="radio-inline">
							</br><input type="radio" name="q3" value="o1" required> the velocity at a particular instant of time

					</label>
						



					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o2" > in opposite direction to the displacement of the moving object.
					</label>
						


			</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >  the total displacement to the time taken.
					</br></label>
					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >the average velocity during the time of acceleration
 <br>
					</label>
						

						</div>

						<br>
						<br>
						<div>
							<h4> <strong>4. A car travelling at 20 m/s starts to speedup. After 5 minutes its speed is 144 m/s. What is the
acceleration of the car?

                      </strong></h4>
					  </br>	<label class="radio-inline">
					<input type="radio" name="q4" value="o1" required > 28.8 m/s 
						


					</br><label class="radio-inline"> 
					<input type="radio" name="q4" value="o2" > 0.41 m/s
						
			</br>	<label class="radio-inline">
					<input type="radio" name="q4" value="o3" > 24.8 m/s

					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > 0.55 m/s

					</label>
						


						</div>
						<br>
						<br>
						<div>
							<h4> <strong>5. A bullet of 200 g mass fired from a 30.0 m high building, horizontally. At the same time a bullet of
the same mass fired vertically down from the same height. What can be concluded about the motion of
the two bullets?
            </strong></h4>
						   </br>	<label class="radio-inline">
					<input type="radio" name="q5" value="o1" required>A bullet fired vertically takes more time to strike the ground
					</label>
						


					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o2" >  Both bullets move with the same horizontal velocity


			</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > Both bullets strike the ground at the same time
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > A bullet fired horizontally takes more time to strike the ground

					</label>
						

						</div>
						<br><br>
						<button type="submit" name="done" class="btn btn-primary">I am Done!</button>
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