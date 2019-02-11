<?php include "includes/connect.php"; ?>
﻿<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Beuty and Blush</title>
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
			<div class="block no-padding">
				<div class="holbrook-slide">
					<div class="holbrook-carousel">
						<div class="slide-post">
							<img src="images\resource\slide-post1.jpeg" alt="">
							<div class="slide-post-name">
								<i>July 30, 2016</i>
								<h3><a href="#" title="">Gone With The Hand</a></h3>
							</div>
						</div><!-- Slide Post -->
						<div class="slide-post">
							<img src="images\resource\slide-post2.jpeg" alt="">
							<div class="slide-post-name">
								<i>July 30, 2016</i>
								<h3><a href="#" title="">Gone With The Hand</a></h3>
							</div>
						</div><!-- Slide Post -->
						<div class="slide-post">
							<img src="images\resource\slide-post3.jpeg" alt="">
							<div class="slide-post-name">
								<i>July 30, 2016</i>
								<h3><a href="#" title="">Gone With The Hand</a></h3>
							</div>
						</div><!-- Slide Post -->
						<div class="slide-post">
							<img src="images\resource\slide-post4.jpeg" alt="">
							<div class="slide-post-name">
								<i>July 30, 2016</i>
								<h3><a href="#" title="">Gone With The Hand</a></h3>
							</div>
						</div><!-- Slide Post -->
					</div><!-- Holbrook Carousel -->
				</div>
			</div>
		</section>

		<section>
			<div class="block remove-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="holbrook-blog">
								<div class="row">
									<div class="masonary">
										<div class="col-md-12">
											<div class="holbrook-post">
												<div class="holbrook-img"><img src="images\resource\post1.jpeg" alt=""></div>
												<div class="holbrook-detail">
													<i class="date">July 29, 2016</i>
													<h2><a href="#" title="">Exploring French Riviera</a></h2>
													<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sIgoragittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctora ornare odio. Sed non  mauris vitae erat consequat auctor europa in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus enim...</p>
													<a class="continue" href="#" title="">Continue Reading</a>
													<div class="post-bottom">
														<div class="tags">
															<a href="#" title="">#travel</a><a href="#" title="">#vacation</a><a href="#" title="">#france</a>
														</div>
														<div class="post-socials">
															<span>4 Comments</span>
															<a href="#" title=""><i class="fa fa-twitter"></i></a>
															<a href="#" title=""><i class="fa fa-pinterest"></i></a>
															<a href="#" title=""><i class="fa fa-facebook"></i></a>
														</div>
													</div>
												</div>
											</div><!-- Holbrook Post -->
										</div>

										<?php
										$query = "SELECT blogs.ID as blogID, blogIMG,addDate,blogTitle, blogDesc,catName
										FROM blogs
										 INNER JOIN categories ON blogs.specID = categories.ID
										 ORDER BY blogs.ID DESC LIMIT 4 ";
											$stmt = $con->prepare($query);
											$stmt->execute();
											$results = $stmt->fetchAll();
											if($stmt->rowCount() > 0) {
												foreach($results as $result) {
												?>

												<div class="col-md-6">
													<div class="holbrook-post style2">
														<div class="holbrook-img"><img src="images\blogs\<?php echo $result['blogIMG'] ; ?>"></div>
														<div class="holbrook-detail">
															<h2><a href="post-details.php?blogId=<?php echo $result['blogID'] ;?>" > <?php echo $result['blogTitle'] ;?></a></h2>
															<i class="date"><?php echo $result['addDate'];?></i>
															<p><?php
																$desc = "";
																if(strlen($result['blogDesc']) > 250) {
																	$desc = substr($result['blogDesc'], 0, 250) . "...";
																} else {
																	$desc = $result['blogDesc'];
																}
																$desc = strtolower($desc);
																$desc = ucfirst($desc);
																echo $desc; ?></p>
															<div class="post-bottom">
																<div class="tags">
																	<a href="<?php echo $result['catName'] ;?>.php" title="">#<?php echo $result['catName'];?></a>
																</div>
															</div>
														</div>
													</div><!-- Holbrook Post -->
												</div>
												<?php }} ?>
											</div>
								</div>
							</div><!-- Holbrook Blog -->
						</div>
						<?php include "side-bar.php"; ?>
					</div>
				</div>
			</div>
		</section>

		<?php include "footer.php"; ?>

	</div>

	<script src="js\jquery.min.js" type="text/javascript"></script>
	<script src="js\bootstrap.min.js" type="text/javascript"></script>
	<script src="js\owl.carousel.min.js"></script>
	<script src="js\jquery.isotope.min.js"></script>
	<script src="js\isotope-initialize.js"></script>
	<script src="js\enscroll-0.5.2.min.js"></script>
	<script src="js\jquery.poptrox.min.js"></script>
	<script type="text/javascript" src="js\jquery.scrolly.js"></script>
	<script src="js\script.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
	        /* ============ Holbrook Carousel ================*/
			$('.holbrook-carousel').owlCarousel({
				autoplay:true,
				smartSpeed:1000,
				loop:true,
				dots:false,
				nav:true,
				margin:10,
				center:true,
				mouseDrag:true,
				items:3,
				autoHeight:true,
				responsive:{
					1200:{items:3},
					980:{items:3},
					768:{items:1},
					480:{items:1},
					0:{items:1}
				}
			});

	        /* ============ Tweets Carousel ================*/
			$('.tweets-carousel').owlCarousel({
				autoplay:true,
				smartSpeed:1000,
				loop:true,
				dots:true,
				nav:false,
				margin:0,
				mouseDrag:true,
				singleItem:true,
				items:1,
				autoHeight:true
			});

		});
	</script>
</body>
