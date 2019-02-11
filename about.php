<?php include "includes/connect.php"; ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> profile </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="css\icons.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="css\responsive.css">
	<link rel="stylesheet" type="text/css" href="css\color.css">
</head>
<body>
	<div id="top" class="theme-layout">
		<?php include "header.php"; ?>

		<section>
			<div class="block remove-gap">
				<div class="container">
					<div class="row">
					<?php if(isset($_GET['userid'])){
											$id = $_GET['userid'];
											$sql = "
											SELECT FullName, email, bio, userIMG, ID as userId
											FROM users WHERE users.ID = ?";
											global $con;
											$query = $con->prepare($sql);
											$query->execute(array($id));
											$result = $query->fetch();
										 ?>
						<div class="col-md-12">
							<div class="about-holbrook">
								<h4>About <?php echo $result['FullName']; ?></h4>
								<div class="about-detail"> 
									<img src="images\users\<?php echo $result['userIMG'];?>" alt="" heigh = "400" width = "450">
									<div class="about-text">
										<span> my email : <?php echo $result['email'] ;?></span>
										<p> <?php echo $result['bio'] ;?></p>
										<img src="images\about-sign.png" alt="">
									</div>
								</div>
							</div><!-- About HolBrook -->
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include "footer.php"; ?>

	</div>
	<script src="js\jquery.min.js" type="text/javascript"></script>
	<script src="js\bootstrap.min.js" type="text/javascript"></script>
	<script src="js\owl.carousel.min.js"></script>
	<script src="js\enscroll-0.5.2.min.js"></script>
	<script src="js\jquery.poptrox.min.js"></script>
	<script type="text/javascript" src="js\jquery.scrolly.js"></script>
	<script src="js\script.js" type="text/javascript"></script>
</body>
