<?php
	session_start();
	include '_dbconnect.php';
	
		$id = $_SESSION['id'];

		 $sql = "SELECT * FROM resume where SNo=".$id; 
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			$fname = $row['Fname'];
			$lname = $row['Lname'];
			$gender= $row['gender'];
			$email = $row['email'];
			$phone = $row['phone'];
			$Estatus = $row['Estatus'];
			$bio = $row['bio'];
			$linked = $row['linked'];
			$Pwebsite = $row['Pwebsite'];
			$jobTitle = $row['jobTitle'];
			$CompanyName = $row['CompanyName'];
			$Location = $row['Location'];
			$Sdate = $row['Sdate'];
			$Edate = $row['Edate'];
			$School = $row['School'];
			$College = $row['College'];
			$qualification = $row['qualification'];
			$field_of_study = $row['field_of_study'];
			$G_start_date = $row['G_start_date'];
			$G_end_date = $row['G_end_date'];
			$skill1 = $row['skill1'];
			$skill2 = $row['skill2'];
			$skill3 = $row['skill3'];
			$skill4 = $row['skill4'];
			$skill5 = $row['skill5'];
		}
		} else {
		echo "0 results";
		}

		mysqli_close($conn);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title><?php echo $fname; ?> | <?php echo $jobTitle; ?> | <?php echo $Pwebsite; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $fname ?> <?php echo $lname ?></h1>
					<h2><?php echo $jobTitle; ?>, <?php echo $CompanyName; ?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						
						<h3><?php echo $Pwebsite; ?></h3>
						<h3><?php echo $phone; ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
							<?php echo $bio; ?>
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2><?php echo $skill1; ?></h2>
									
								</div>

								<div class="talent">
									<h2><?php echo $skill2; ?></h2>
									
								</div>

								<div class="talent">
									<h2><?php echo $skill3; ?></h2>
									
								</div>

								
						</div>
					</div><!--// .yui-gf -->

					

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2><?php echo $CompanyName; ?></h2>
								<h3><?php echo $jobTitle; ?></h3>
								<h4><?php echo $Sdate;  ?> to <?php echo $Edate; ?></h4>
								<p><?php echo $Location; ?></p>
							</div>

							<!-- <div class="job">
								<h2>Apple Inc.</h2>
								<h3>Senior Interface Designer</h3>
								<h4>2005-2007</h4>
							</div>

							<div class="job">
								<h2>Microsoft</h2>
								<h3>Principal and Creative Lead</h3>
								<h4>2004-2005</h4>
							</div>


							<div class="job last">
								<h2>International Business Machines (IBM)</h2>
								<h3>Lead Web Designer</h3>
								<h4>2001-2004</h4>
							</div> -->

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>School- <?php echo $School; ?></h2>
							<h2>University- <?php echo $College; ?></h2>
							<h2>Qualification- <?php echo $qualification; ?></h2>
							<h2>Field of study- <?php echo $field_of_study; ?></h2>
							<h2>Graduation Period- <?php echo $G_start_date; ?> to <?php echo $G_end_date; ?> </h2>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo $fname; ?> <?php echo $lname; ?>  &mdash;  <?php echo $email; ?>&mdash; <?php echo $phone; ?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

