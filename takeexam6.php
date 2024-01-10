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

			$row = mysqli_fetch_array( $result ) ;
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
						<span style="color: red;"><h3>You Can take Chemistry EUEE </h3></span>

						<br>
						<div>
							<h4> <strong>1.  The statement ‘If a system at equilibrium is subjected to a stress, the system will readjust itself to
reduce the effects of the stress’ is known as
</strong></h4>
							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o1" required>&nbsp;   Avogadro's principle. 
							</br></label>
						


							</br><label class="radio-inline">
							<input type="radio" name="q1" value="o2" >Faradays law. 
						





					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >The law of mass action states that
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >. the Keq expression is the ratio of the concentrations of reactants to the products raised to their
coefficients.


					</label>
						





						</div>

						<br>
						<br>
						<div>
							<h4> <strong>2 . One of the following is NOT a common application of silicon


                                 </strong></h4>
								 </br><label class="radio-inline">
					<input type="radio" name="q2" value="o1" required > in the control of the frequency of television transmissions.

					</label>
						





					</br>	<label class="radio-inline">
					<input type="radio" name="q2" value="o2" >  ons.
B. in the construction of transistors and microprocessors 
					</label>
						

					</br><label class="radio-inline">
							<input type="radio" name="q2" value="o3" > in the production of polish body parts cars
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q2" value="o3" > in coating iron to prevent it from rusting
					</label>
						


						</div>

						<br>
						<br>
						<div>
							<h4> <strong>3.One of the following is NOT a cause of uncertainty in measurement?
 </strong></h4>
							</br><label class="radio-inline">
							</br><input type="radio" name="q3" value="o1" required> The person doing the experiment
					</label>
						



					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o2" > The type of material measured
					</label>
						


			</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >  The measuring device
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" > The environment where the measurement is made
 <br>
					</label>
						

						</div>

						<br>
						<br>
						<div>
							<h4> <strong>4. Hydrogen bonding occurs in compounds that contain H-N, H-O and H-F bonds. These bonds are
stronger than the ordinary dipole-dipole interactions because
acceleration of the car?

                      </strong></h4>
					  </br>	<label class="radio-inline">
					<input type="radio" name="q4" value="o1" required >  the H-N, H-O and H-F bonds are non-polar and thus do not interact with neighboring molecules

						


					</br><label class="radio-inline">
					<input type="radio" name="q4" value="o2" >  the partially positive H of one molecule is attracted to the partially negative lone pairs on the N, O or
F of another molecule
						
								<label class="radio-inline">
					<input type="radio" name="q4" value="o3" > . the small sizes of N, O and F makes these atoms so electropositive that their covalently bonded H is
highly negative.

					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > the H-N, H-O and H-F bonds are non-polar and thus do not interact with neighboring molecules

					</label>
						


						</div>
						<br>
						<br>
						<div>
							<h4> <strong>5. Which of the following is an example of exception to the octet rule?
            </strong></h4>
						   </br>	<label class="radio-inline">
					<input type="radio" name="q5" value="o1" required>CCl4
					</label>
						


					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o2" >NH3  


			</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > PCl5
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > H2O

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