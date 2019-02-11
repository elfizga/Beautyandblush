<?php include "includes/connect.php"; ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Make-Up </title>
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
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="featured-mas">
								<div class="row">
									<div class="masonary">
										<div class="col-md-8">
											<div class="slide-post style2">
												<img src="images\resource\makeup.jpg" alt="">
												<div class="slide-post-name">
													<h3><a href="#" title=""> MAKE-UP POSTS</a></h3>
												</div>
											</div><!-- Slide Post -->
										</div>
										<div class="col-md-4">
											<div class="slide-post style3">
												<img src="images\resource\1.jpg" alt="">
												<div class="slide-post-name">
													<h3><a href="#" title=""> Best lipstick colors </a></h3>
												</div>
											</div><!-- Slide Post -->
										</div>
										<div class="col-md-4">
											<div class="slide-post style3">
												<img src="images\resource\Eye.jpg" alt="">
												<div class="slide-post-name">
													<h3><a href="#" title=""> MAC new mascara </a></h3>
												</div>
											</div><!-- Slide Post -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block remove-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="holbrook-blog">
								<?php
                            global $con;
                            $query = "SELECT blogs.ID as blogID, blogIMG,addDate, FullName,blogTitle, blogDesc FROM blogs INNER JOIN users ON blogs.userID = users.ID WHERE specID = 3";
                            $stmt = $con->prepare($query);
                            $stmt->execute();
                            $results = $stmt->fetchAll();

                            if($stmt->rowCount() > 0) {
                              foreach($results as $result) {
                                 ?>
																<div class="holbrook-post style3" style="height:280px; display:block">
																	<div class="holbrook-img" style="width: 40%; height:100%; display: inline-block; float:left;"><img style="width: 100%; height:100%" src="images\blogs/<?php echo $result['blogIMG']; ?>" alt=""></div>
																	<div class="holbrook-detail" style="display: inline-block; float:left; width: 60%;">
																		<i class="date"><?php echo $result['addDate']; ?></i>
																		<h2><a href="#" title=""><?php echo $result['blogTitle']; ?></a></h2>
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
																				<a href="#" title="">#makeup</a>
																			</div>
																		</div>
																	</div>
																</div><!-- Holbrook Post -->

																<?php
															}}
															?>

								all of the rest are test

								<div class="holbrook-post style3">
									<div class="holbrook-img"><img src="images\resource\list-post2.jpeg" alt=""></div>
									<div class="holbrook-detail">
										<i class="date">July 29, 2016</i>
										<h2><a href="#" title="">Best Classic Shoes 	</a></h2>
										<p>Proin gravida nibh velasel sol auctor aliquet nean solli citudin, lorem quis abibendum auctor, nisibrallita conse quat ipsum, necagiteis jmnibh Igor id elituis edo odio...</p>
										<div class="post-bottom">
											<div class="tags">
												<a href="#" title="">#travel</a><a href="#" title="">#vacation</a><a href="#" title="">#france</a>
											</div>
										</div>
									</div>
								</div><!-- Holbrook Post -->

								<div class="holbrook-post style3">
									<div class="holbrook-img"><img src="images\resource\list-post3.jpeg" alt=""></div>
									<div class="holbrook-detail">
										<i class="date">July 29, 2016</i>
										<h2><a href="#" title="">Milan-Inspired Perfume </a></h2>
										<p>Proin gravida nibh velasel sol auctor aliquet nean solli citudin, lorem quis abibendum auctor, nisibrallita conse quat ipsum, necagiteis jmnibh Igor id elituis edo odio...</p>
										<div class="post-bottom">
											<div class="tags">
												<a href="#" title="">#travel</a><a href="#" title="">#vacation</a><a href="#" title="">#france</a>
											</div>
										</div>
									</div>
								</div><!-- Holbrook Post -->

								<div class="holbrook-post style3">
									<div class="holbrook-img"><img src="images\resource\list-post4.jpeg" alt=""></div>
									<div class="holbrook-detail">
										<i class="date">July 29, 2016</i>
										<h2><a href="#" title="">Autumn Denim Guide</a></h2>
										<p>Proin gravida nibh velasel sol auctor aliquet nean solli citudin, lorem quis abibendum auctor, nisibrallita conse quat ipsum, necagiteis jmnibh Igor id elituis edo odio...</p>
										<div class="post-bottom">
											<div class="tags">
												<a href="#" title="">#travel</a><a href="#" title="">#vacation</a><a href="#" title="">#france</a>
											</div>
										</div>
									</div>
								</div><!-- Holbrook Post -->

								<div class="holbrook-post style3">
									<div class="holbrook-img"><img src="images\resource\list-post6.jpeg" alt=""></div>
									<div class="holbrook-detail">
										<i class="date">July 29, 2016</i>
										<h2><a href="#" title="">New York’s Design sHOP</a></h2>
										<p>Proin gravida nibh velasel sol auctor aliquet nean solli citudin, lorem quis abibendum auctor, nisibrallita conse quat ipsum, necagiteis jmnibh Igor id elituis edo odio...</p>
										<div class="post-bottom">
											<div class="tags">
												<a href="#" title="">#travel</a><a href="#" title="">#vacation</a><a href="#" title="">#france</a>
											</div>
										</div>
									</div>
								</div><!-- Holbrook Post -->

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
				nav:false,
				margin:10,
				center:true,
				mouseDrag:true,
				singleItem:true,
				items:1,
				autoHeight:true,
				animateIn:"fadeIn",
				animateOut:"fadeOut"
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
