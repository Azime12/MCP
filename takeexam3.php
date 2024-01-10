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
								<td><strong>ID :</strong>
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
						<span style="color: red;"><h3>You Can take Maths EUEE </h3></span>

						<br>
						<div>
							<h4> <strong>1. What is the modulus of the complex number -6+8i?
</strong></h4>
							</br><label class="radio-inline">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="o1" required>10
							</label>
						


							</br><label class="radio-inline">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="o2" >8
						





					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >5
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q1" value="o3" >2

					</label>
						





						</div>

						<br>
						<br>
						<div>
							<h4> <strong>2 Given two vectors u= (1, 3) and v= (-3, 5) in the plane. Then 6u+2v is equal to

                                 </strong></h4>
								 </br><label class="radio-inline">
					<input type="radio" name="q2" value="o1" require > (2,28)
					</label>
						





					</br>	<label class="radio-inline">
					<input type="radio" name="q2" value="o2" > (0,28)
					</label>
						

					</br><label class="radio-inline">
					<input type="radio" name="q2" value="o3" > (0,18)
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q2" value="o3" > (3,3)
					</label>
						


						</div>

						<br>
						<br>
						<div>
							<h4> <strong>3. Which one of the following is the scalar (dot) product of the vectors (2, -4, 6) and (-2, -1, 0)?</strong></h4>
							</br><label class="radio-inline">
							</br><input type="radio" name="q3" value="o1" required> 8

					</label>
						



					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o2" >0
					</label>
						


			</br>	<label class="radio-inline">
					<input type="radio" name="q3" value="o3" >  -8
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q3" value="o3" >6
 <br>
					</label>
						

						</div>

						<br>
						<br>
						<div>
							<h4> <strong>4. Which one of the following defines a one-to-one function?
                      </strong></h4>
					  </br>	<label class="radio-inline">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="o1" required> f={(x, y): y=x2+1} 
						


					</br><label class="radio-inline"> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="o2" > f={(x, y): y is a father of x}
						
			</br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > f={(x, y): x is a sister of y}

					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q4" value="o3" > f={(x, y): y=3x-1}

					</label>
						


						</div>
						<br>
						<br>
						<div>
							<h4> <strong>5. Which one of the following sentence has a true value?
            </strong></h4>
						   </br>	<label class="radio-inline">
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="o1" require> Man is selfish
					</label>
						


					</br><label class="radio-inline">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="o2" > We shall win!

			</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > Tomorrow is a beautiful day
					</label>
					</br><label class="radio-inline">
					<input type="radio" name="q5" value="o3" > Man is selfish

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