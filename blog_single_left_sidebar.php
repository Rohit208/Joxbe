<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>The Infinite Loop of Awesomeness</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/INFINITY SYMBOL.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/INFINITY SYMBOL.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader"></div>
        <div class="loader_text font-alt mb_text">Heal your Conten</div>
      </div>
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
         <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <a href="index.php"><img class="brand" src="assets/images/favicons/LOGO-JOXBE_FINAL.png" alt="Joxbe" border="0"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="checkout.php">Order Content</a></li>
              <li class="dropdown"><a href="index.php">Home</a></li>
              <li class="dropdown"><a href="about.html" >Know Us</a></li>
              <li class="dropdown"><a href="Why_hire_us.html" >Why Hire Us</a></li>
              <li class="dropdown"><a href="index_portfolio.php" >Works</a></li>
              <li class="dropdown"><a href="blog_grid_masonry_col_2.php" >Blogs</a></li>
              <li class="dropdown"><a href="contact.php" >Contact Us</a></li>
              <li class="dropdown"><a href="login_register.html" >Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-1">
              
                <?php
                
                    include("php/config.php");
                    require_once("php/nbbc/nbbc.php");

                    //Connection Check
                    if ($db->connect_errno) {
                      header("location: ../404.html");
                      exit();
                    }

                    $id  = $_GET['id'];

                    if( $id ) {
                      
                      $sql = "SELECT * FROM joxbe_blog_image_register WHERE id = $id";
                      $result = mysqli_query($db,$sql);
                      
                      if($row = mysqli_fetch_array($result)) {           
                        echo  "<div class='post'><div class='post-thumbnail'>";
                        echo  "<img src='assets/images/blogs/". $row['image'] ."' alt='Blog Featured Image'/>";
                        echo  "</div><div class='post-header font-alt'><h1 class='post-title'>";
                        echo  $row['header'] ."</h1>";
                        echo  "<div class='post-meta'>By&nbsp;". $row['bloger_name'] ."&nbsp;". $row['blog_timestamp'] ." </div></div>";
                        echo  "<div class='post-entry'>". $row['text'] ."</div></div>";
                      } else{
                        
                        echo  "<div class='post'><h2>Nothings' To Display</h2></div>"; 
                      }

                      $sql = "SELECT * FROM joxbe_blog_comments WHERE blog_id = $id";
                      $res = mysqli_query($db,$sql);
                      $count = mysqli_num_rows($res);
                     
                      $bbcode = new BBCode;

                      echo "<div class='comments'><h4 class='comment-title font-alt'>There are ". $count ." comments</h4>";
                      while($row = mysqli_fetch_array($res)){
                       
                        $comment = $row['comment'];
                        $output = $bbcode->Parse($comment);
                        $rand = rand(1,3);

                        echo "<div class='comment clearfix'><div class='comment-avatar'><img src='assets/images/favicons/avatar".$rand.".png' alt='avatar'/></div>";
                        echo "<div class='comment-content clearfix'><div class='comment-author font-alt'>";
                        echo $row['name'] ."</div><div class='comment-body'>";
                        echo "<p>". $output ."</p>";
                        echo "</div><div class='comment-meta font-alt'> Comment By : ". $row['email'] ." On   ". $row['comment_date_time'] ."     </div></div></div>";
                      }

                      echo "</div>";
                      $url = "php/blog_comments.php?id=$id";

                    } else {
                        
                      echo  "<div class='post'><h1>Nothings' Selected</h1></div>";

                    }
                ?>                     

                <div class="comment-form">
                  <h4 class="comment-form-title font-alt">Add your comment</h4>
                  <form id="CommentForm" role="form" method="post" action='<?php echo "$url";?>'>
                    <div class="form-group">
                      <input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Comment"></textarea>
                    </div>
                    <button class="btn btn-round btn-d" type="submit" name="AddComment">Post Comment</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Joxbe</h5>
                  <p>Grow Your Business with the help of Joxbe, as we are the specialists with the superpower of knowing what our clients desire to convey to the audience with the use of effective communication.</p>
                  <p>Phone: +91 - 9936649666</p>
                  <p><a href="https://www.facebook.com/Joxbe-1735913369860884/"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/Joxbe1"><i class="fa fa-twitter"></i></a></p>
                  <p>Email:<a href="https://myaccount.google.com/"> ContactJoxbe@gmail.com</a></p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <?php
                
                      include("php/config.php");
                      
                      $sql = "
                       SELECT  
                        joxbe_blog_comments.blog_id ,
                        joxbe_blog_comments.name ,
                        joxbe_blog_image_register.header 
                       FROM joxbe_blog_comments 
                       JOIN joxbe_blog_image_register 
                       ON joxbe_blog_comments.blog_id = joxbe_blog_image_register.id
                       ORDER BY joxbe_blog_image_register.blog_timestamp DESC LIMIT 6
                      ";
                    
                      $result = mysqli_query($db,$sql);
                      while($row = mysqli_fetch_array($result)) {
                       
                        echo "<li> ". $row['name'] ." on 
                        <a href='blog_single_left_sidebar.php?id=". $row['blog_id'] ."'>". $row['header'] 
                        ."</a></li>";
                        
                      }

                    ?>
                    
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">

                    <?php
                
                     include("php/config.php");
                     $sql = "SELECT * FROM joxbe_blog_image_register ORDER BY id DESC LIMIT 3";
                     $result = mysqli_query($db,$sql);
                
                     while($row = mysqli_fetch_array($result)){

                      echo "<li class='clearfix'><div class='widget-posts-image'><a href=''><img src='assets/images/blogs/". $row['image'] ."' alt='Post Thumbnail'/></a></div><div class='widget-posts-body'>";
                      echo "<div class='widget-posts-title'><a href='blog_single_left_sidebar.php?id=". $row['id'] ."'>". $row['header'] ."</a></div>";
                      echo "<div class='widget-posts-meta'></div>". $row['blog_timestamp'] ."</div></li>";

                     }

                    ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                 <p class="copyright font-alt">&copy; 2018&nbsp;<a href="index.php">Joxbe</a>, All Rights Reserved | Made With 💕 By <a href="https://in.linkedin.com/in/rohit-rehni-a0b1a5101">Palak Sharma</a></p>
              </div>
              <div class="col-sm-4">
                <div class="footer-social-links"><a href="https://www.facebook.com/Joxbe-1735913369860884/"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/Joxbe1"><i class="fa fa-twitter"></i><a href="https://web.skype.com/en/"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>