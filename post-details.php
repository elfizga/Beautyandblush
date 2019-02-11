<?php include "includes/connect.php"; ?>
﻿<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>blog details</title>
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
						<div class="col-md-8">
							<div class="single-post">
							<?php
                                if(isset($_GET['blogId'])){
                                $id=$_GET['blogId'];
                                $sql = "
                                            SELECT
                                            blogs.ID, blogs.blogTitle, blogs.blogIMG , blogs.blogDesc ,  blogs.addDate ,
                                            users.FullName , users.userIMG , users.bio
                                            FROM blogs
                                           
                                            INNER JOIN users ON users.ID = blogs.userID WHERE blogs.ID = ? ";
                                            global $con;
                                            $query = $con->prepare($sql);
                                            $query->execute(array($id));
                                            $result = $query->fetch();
                                            $blogID = $result['ID'];
                                            ?>
								<div class="single-img"><img src="images/blogs\<?php echo $result['blogIMG'] ?>" alt=""></div>
								
								<div class="single-detail">
									<i class="date"><?php echo $result['addDate'] ?></i>
									<h1 class="post-title"><?php echo $result['blogTitle'] ?></h1>
									<p><?php echo $result['blogDesc'] ?></p>
									<?php } ?>
									<div class="single-bottom">
										<span>2 Comments</span>
										<a href="#comments" title="">Write a comment</a>
										<div class="socials">
											<a href="#" title=""><i class="fa fa-twitter"></i></a>
											<a href="#" title=""><i class="fa fa-facebook"></i></a>
											<a href="#" title=""><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>

								<div class="author">
									<img src="images\users\p1.jpeg" alt="">
									<div class="author-detail">
										<strong> <?php echo $result['FullName'] ?></strong>
										<p><?php echo $result['bio'] ?></p>
										<div class="socials">
											<a href="#" title=""><i class="fa fa-twitter"></i></a>
											<a href="#" title=""><i class="fa fa-facebook"></i></a>
											<a href="#" title=""><i class="fa fa-vimeo"></i></a>
											<a href="#" title=""><i class="fa fa-instagram"></i></a>
											<a href="#" title=""><i class="fa fa-tumblr"></i></a>
										</div>
									</div>
								</div><!-- Author -->
								<div class="related-posts">
									<h5 class="small-title">Related Posts</h5>
									<div class="related-carousel">
								<?php
								global $con;
									$query = "SELECT blogs.ID as blogID, blogIMG,addDate,blogTitle, blogDesc FROM blogs ORDER BY ID DESC LIMIT 6 ";
									$stmt = $con->prepare($query);
									$stmt->execute();
									$results = $stmt->fetchAll();
									if($stmt->rowCount() > 0) {
									foreach($results as $result) {
										?>
								
										<div class="related-post">
											<div class="related-img"><img src="images\resource\related1.jpeg" alt=""></div>
											<i><?php echo $result['addDate'] ?></i>
											<h4><a href="post-details.php?blogId=<?php echo $result['blogID'] ;?>" title=""><?php echo $result['blogTitle'] ?> </a></h4>
										</div><!-- Related Post -->
										<?php }} ?>
									</div>
								</div><!-- Related Posts -->
				 

								<div class="post-comments" >
									<h5 class="small-title">2 Comments</h5>
									<ul>
										<li>
											<div class="comment">
												<img src="images\resource\comment1.jpeg" alt="">
												<div class="comment-detail">
													<h4>Karlie Kloss <i>July 28, 2016</i></h4>
													<a class="reply" href="#" title="">Reply</a>
													<p>Fusce vitae mi cursus augue tempor gravida. Nam ut nunc rutrum, finibus sapien , venenatis tortor. Maenas vel quam aliquet, iaculis elit ac, sollicitudin dolor. Praesent pulvinar sollicitudin rognation.</p>
												</div>
											</div><!-- Comment -->
										</li>
										
									</ul>
								</div><!-- Post Comments -->

								<div class="comment-form" id="comments">
									<h5 class="small-title">Write A Comment</h5>
									<form class="simple-form">
										<div class="row">
											<div class="col-md-4"><input type="text" placeholder="Name *" ></div>
											<div class="col-md-4"><input type="email" placeholder="Email *"></div>
											<div class="col-md-4"><input type="text" placeholder="Website"></div>
											<div class="col-md-12"><textarea placeholder="Message"></textarea></div>
											<button type="submit" class="simple-btn" style="position:relative;top:7px;left:60px;">Post Comment</button>
										</div>
									</form>
								</div>


							</div><!-- Single Post -->
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
	<script src="js\enscroll-0.5.2.min.js"></script>
	<script src="js\jquery.poptrox.min.js"></script>
	<script type="text/javascript" src="js\jquery.scrolly.js"></script>
	<script src="js\script.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
	        /* ============ Holbrook Carousel ================*/
			$('.related-carousel').owlCarousel({
				autoplay:true,
				smartSpeed:1000,
				loop:true,
				dots:true,
				nav:false,
				margin:30,
				mouseDrag:true,
				items:3,
				autoHeight:true,
				responsive:{
					1200:{items:3},
					980:{items:2},
					768:{items:2},
					480:{items:2},
					0:{items:1}
				}
			});

		});
	</script>
</body>
