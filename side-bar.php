<aside class="col-md-4 sidebar">
  <div class="widget">
    <h5 class="widget-title">About Us</h5>
    <div class="about">
      <img src="images\resource\about-widget.jpeg" alt="">
      <h4>Beauty & Blush </h4>
      <p> Beauty & Blush Blog is a Beauty blog dealing with makeup and product reviews for girls from over the world .</p>
    </div>
  </div><!-- Widget -->


  <div class="widget">
    <h5 class="widget-title">Keep In Touch</h5>
    <div class="socials">
      <a href="#" title=""><i class="fa fa-twitter"></i></a>
      <a href="#" title=""><i class="fa fa-facebook"></i></a>
      <a href="#" title=""><i class="fa fa-vimeo"></i></a>
      <a href="#" title=""><i class="fa fa-instagram"></i></a>
      <a href="#" title=""><i class="fa fa-tumblr"></i></a>
    </div>
  </div>
<!-- Widget -->

  <div class="widget">
    <h5 class="widget-title">Recent Posts</h5>
    <div class="featured-post">
      
    <?php
                global $con;
                $query = "SELECT blogs.ID as blogID, blogIMG,addDate,blogTitle, blogDesc FROM blogs ORDER BY ID DESC LIMIT 5 ";
                $stmt = $con->prepare($query);
                $stmt->execute();
                $results = $stmt->fetchAll();
                if($stmt->rowCount() > 0) {
                  foreach($results as $result) {
                     ?>
                    <div id="recent-sidebar">
                    <h5 style="margin-top: 20px; color : #555 ;"><a href="post-details.php?blogId=<?php echo $result['blogID'] ;?>"> <?php
                                                        $title = ""; 
                                                            if(strlen($result['blogTitle']) > 27) {
                                                                $title = substr($result['blogTitle'], 0, 33) . " ... ";
                                                            } else {
                                                                $title = $result['blogTitle'];
                                                            }
                                                            $title = strtolower($title);
                                                            $title = ucfirst($title);
                                                        echo $title; ?> </a></h5> 
                    <b><hr></b>
                    </div>
                     
                     <?php
                   }}?>

    </div>
  </div><!-- Widget -->

  <div class="add"><a href="#" title=""><img src="images\resource\add.jpeg" alt=""></a></div>

  <div class="widget">
    <h5 class="widget-title">Categories</h5>
    <ul>
      <li><a href="fashion.php" title="">Fashion</a> </li>
      <li><a href="lifestyle.php" title="">Lifestyle</a> </li>
      <li><a href="makeup.php" title="">Makeup</a> </li>

    </ul>
  </div>

 

</aside><!-- Sidebar -->
