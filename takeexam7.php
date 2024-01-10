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

			while ( $row = mysqli_fetch_array( $result ) ) {
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
						<span style="color: red;"><h3>You Can take Civics EUEE </h3></span>

						<br>
						<div>
							<h4> <strong>1.Why do we need to have established and fair procedures in the governance of society?
</strong></h4>
							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o1" require>&nbsp;  To make people feel their freedom may be constrained.
							</br></label>
						


							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o2" >To help and comfort regional governments in their daily routines.
						





					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >To deny the federal government manage its day-to-day activities.
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >To help and comfort regional governments in their daily routines.

					</label>


						</div>

						<br>
						<br>
						<div>
							<h4> <strong>2 The absence of rule of law could cause


                                 </strong></h4>
								 </br><label class="radio-inline">
					<input type="radio" name="q2" value="o1" require >  the possible replacement of the state with individual cooperation's.
					</label>
				
					</br>	<label class="radio-inline">
					<input type="radio" name="q2" value="o2" >  make people believe to live even without the existence of the state.
					</label>
						

					</br><label class="radio-inline">
							<input type="radio" name="q2" value="o3" >  anarchy, crisis, dictatorship and could even leads to state collapse.
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q2" value="o3" > no major problem in social life
					</label>
						


						</div>

						<br>
						<br>
						<div>
							<h4> <strong>3. What roles do individuals and institutions have in combating corruption?
 </strong></h4>
							</br><label class="radio-inline">
							</br><input type="radio" name="q3" value="o1" require> When government believes that it is its exclusive domain to combat it

					</label>
						
                   




					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o2" >  When the public assigns the task as purely a government engagement.
					</label>
						


							<br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >  When individuals demonstrate civility and institutions demonstrate transparency and accountability
					</br></label>
					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" > When they act separately to check it.
 <br>
					</label>
						

						</div>

						<br>
						<br>
						<div>
							<h4> <strong>4. How do we explain the equality and burdens that nations, nationalities and peoples have in Ethiopia?
                      </strong></h4>
					  </br>	<label class="radio-inline">
					<input type="radio" name="q4" value="o1" require > The three groups are equal and their interaction generates mutual burdens they have to shoulder. 
						


					</br><label class="radio-inline"> 
					<input type="radio" name="q4" value="o2" > The three groups are equal and their interaction generates mutual burdens they have to shoulder.
						
							<br>	<label class="radio-inline">
					<input type="radio" name="q4" value="o3" > Nationalities could be justified to think to have more rights than peoples.

					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > Nations are more equal than others.

					</label>
						

						</div>
						<br>
						<br>
						<div>
							<h4> <strong>5. Public desire means the promotion of the interest of
            </strong></h4>
						   </br>	<label class="radio-inline">
					<input type="radio" name="q5" value="o1" require>distinguished personalities.
					</label>
						


					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o2" >  the general public in a country.


			</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > groups workings against the society.
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > people living control the power of government only
					</label>
						

						</div>
						<br><br>
						<button type="submit" name="done" class="btn btn-primary">I am Done!</button>
					</div>
				</form>
			</fieldset>
			<?php
			}
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