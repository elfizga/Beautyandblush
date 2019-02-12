
<header>
  <div class="topbar">
    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="index.php" title="">Home</a></li>
          <li><a href="lifestyle.php" title="">Lifestyle</a></li>
          <li><a href="fashion.php" title="">Fashion</a></li>
          <li><a href="makeup.php" title="">makeup</a></li>
          <?php
            if(isset($_SESSION['userid'])) { ?>
              <li><a href="about.php?userid=<?php echo $_SESSION['userid']; ?>" title="">Profile</a></li>
            <?php
            }
          ?>

          <li><a href="contact.php" title="">Contact us</a></li>
        </ul>
      </div><!-- Menu -->
      <div class="header-ext">
        <?php
        if(!isset($_SESSION['userid'])) { ?>

          <div class="control-buttons">
            <a href="login.php" style="color:white" title="">Login</a>
            <a href="signup.php" style="color:white" title="">Sign Up</a>
          </div><!-- Control Buttons -->

          <?php
        } else { ?>
          <div class="control-buttons">
            <a href="post-a-blog.php" style="color:white" title="">Add New Blog</a>
            <a href="logout.php" style="color:white" title="">Logout</a>
          </div><!-- Control Buttons -->
          <?php
        }
         ?>

        <div class="search">
          <a href="#" title=""><i class="fa fa-search" style="line-height: 55px;"></i></a>
          <form><input type="text" placeholder="Type and Hit Enter"></form>
        </div><!-- Search -->
      </div><!-- Header Extras -->
    </div>
  </div>
  <div class="logo">
    <div class="container">
      <a href="#" title=""><img src="images\bandb.png" alt="" heigh="250" width="500"></a>
    </div>
  </div>
</header><!-- Header -->
