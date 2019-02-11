<?php
  include "includes/connect.php";
    $error = false;

    if(!isset($_SESSION['userid']) || $_SESSION['userid'] <= 0) {
      header("location: index.php");
    }

    if(isset($_POST['title']) && isset($_POST['category']) && isset($_POST['desc'])) {
     
      global $con;
      $title = $_POST['title'];
      $category = $_POST['category'];
      $desc = $_POST['desc'];

      $image = $_FILES['file'];

  		if( !empty($image['name']) ) {
              $imageName = rand(0, 100000) . "_" . $image['name'];
              move_uploaded_file($image['tmp_name'], "images/blogs/" . $imageName);
            } else {
              $imageName = "defult.jpg";
            }

      $query = "INSERT INTO blogs(blogTitle, blogDesc, blogImg, addDate, userID ,specID)
  		 VALUES(:blogTitle, :blogDesc, :blogImg, NOW(), :userID , :category)";
      $stmt = $con->prepare($query);
      $stmt->bindParam(":blogTitle", $title);
      $stmt->bindParam(":blogDesc", $desc);
      $stmt->bindParam(":blogImg", $imageName);
      $stmt->bindParam(":userID", $_SESSION['userid']);
      $stmt->bindParam(":category", $category);

      $stmt->execute();

  }

?>

<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Beuty and Blush</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="css\icons.css">
  <link rel="stylesheet" type="text/css" href="css\color.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="css\responsive.css">
	
  <link href="css\summernote.css" rel="stylesheet" />
  <style>
    .inputfile + label {
  font-size: 1.25em;
  font-weight: 700;
  padding:8px;
  width: 100%;
  margin-top:9px;
  color: grey;
  border-radius: 5px;
  background-color: white;
  display: inline-block;
  cursor: pointer;
  text-align: center;
  position: absolute;
  top:1px;
  left:5px;
}

.form-wrapper {
  position: relative; }
  .form-wrapper i {
    position: absolute;
    bottom: 9px;
    right: 0; }
</style>
</head>
<body>
	<div id="top" class="theme-layout">
		<?php include "header.php"; ?>

    <section class="contact-section sp-eight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                            <div class="contact-form-area">
                                    <div class="title-text-two">Post a Blog </div>
                                    <div class="rd-form rd-mailform form-lg">
                                        <div class="alert alert-danger hide_alert <?php
                                     if($isError == true) { echo'show_alert';} ?>" id="erralert" style="display:none;">
                                            <strong> <?php echo $message ?> </strong>
                                        </div>
                                    <form action="post-a-blog.php" method="POST" enctype="multipart/form-data" class="default-form" >
                                        <div class="row">
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" name="title" value="" placeholder="Title" required="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                      <select placehoder="Category" name="category">
                                                          <option label="Select a category" disabled selected></option>
                                                          <?php
                                                          global $con;
                                                          $query = $con->prepare("SELECT * FROM categories;");
                                                          $query->execute();
                                                          $categories = $query->fetchAll();
                                                          foreach($categories as $category){
                                                              echo '<option value="' . $category['ID'] . '">' . $category['catName'] . '</option>';
                                                          }
                                                          ?>
                                                      </select>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <textarea class="description" placeholder="Description" name="desc" required=""></textarea>
                                                    </div><br>

                                                    <div class="form-wrapper col-md-12 col-sm-12 col-xs-12">
                                                       <input type="file" name="file" id="file" class="inputfile" accept="image"/>
                                                     <label for="file" style="border: #f3a28b solid 1px">Choose a picture</label>
                                                        </div>


                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <button type="submit" style="margin-left: 0;padding:9px;position:relative;left:90px;top:10px;border-radius:3px;" class="btn-one">Post A Blog</button>
                                                    </div>
                                                   
                                                   
                                        </div>
                                 </form>
                         </div>
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
        	<script src="js\jquery.isotope.min.js"></script>
        	<script src="js\isotope-initialize.js"></script>
        	<script src="js\enscroll-0.5.2.min.js"></script>
        	<script src="js\jquery.poptrox.min.js"></script>
        	<script type="text/javascript" src="js\jquery.scrolly.js"></script>
          <script src="js\summernote.js" type="text/javascript"></script>
        	<script src="js\script.js" type="text/javascript"></script>

        	<script type="text/javascript">
        		jQuery(document).ready(function() {

              $(document).ready(function() {
                $('.description').summernote( {
                  toolbar: false,
                  height: 250,
                  placeholder: 'Description'
                });
              });

        		});
        	</script>
        </body>
