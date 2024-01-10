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

			 $row = mysqli_fetch_array( $result );
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
						<span style="color: red;"><h3>You Can take Biology EUEE </h3></span>

						<br>
						<div>
							<h4> <strong>1. Which one of the following is true about the importance of Lucy in resolving debates about human
evolution?


</strong></h4>
							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o1" required>&nbsp;  Big brains came before bipedalism.
							</br></label>
						


							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o2" >Lucy had a brain size of 1.8% of her body mass.
						





					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" > Bipedalism came before big brains.
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" > Lucy was partially an arboreal primate.

					</label>
						





						</div>

						<br>
						<br>
						<div>
							<h4> <strong> 2 The quick withdrawal of your hand from a hot plate is an example of
 
 

                                 </strong></h4>
								 </br><label class="radio-inline">
					<input type="radio" name="q2" value="o1" required > A. fixed action pattern
					</label>
						





					</br>	<label class="radio-inline">
					<input type="radio" name="q2" value="o2" >  biological clock
					</label>
						

					</br><label class="radio-inline">
							<input type="radio" name="q2" value="o3" >  key stimulus
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q2" value="o3" >  innate behavior
					</label>
						


						</div>

						<br>
						<br>
						<div>
							<h4> <strong>3. Which one of the following processes describes a biological clock?
 
</strong></h4>
							</br><label class="radio-inline">
							<input type="radio" name="q3" value="o1" required>  Removal of one's thumb from hot objects quickly

					</label>
						



					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o2" >The growing of plants towards light
					</label>
						


			</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >  Circannual migration of birds from temperate to tropical areas
					</br></label>
					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >Kinesis and taxes of woodlice and other simple animals
 <br>
					</label>
						

						</div>

						<br>
						<br>
						<div>
							<h4> <strong> 4 Identify learned behavior from the following.

                      </strong></h4>
					  </br>	<label class="radio-inline">
					<input type="radio" name="q4" value="o1" required > Ants making nest
						


					</br><label class="radio-inline">  
					<input type="radio" name="q4" value="o2" > Dog trained to hunt.
						
								<br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > Honey bee making honey.

					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > Child withdraws h

					</label>
						


						</div>
						<br>
						<br>
						<div>
							<h4> <strong>5. Which one of the following features is unique to bacteria?
            </strong></h4>
						   </br>	<label class="radio-inline">
					<input type="radio" name="q5" value="o1" required>  Presence of permeable membrane
					</label>
						


					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o2" > Being unicellular

			</br>	<label class="radio-inline">
					<input type="radio" name="q5" value="o3" >  Absence of nuclear membrane
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > Having flagella for locomotion

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