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
        <div class="loader_text font-alt mb_text">Fuel your Business with Joxbe</div>
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
        
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div role="tabpanel">

                <?php

                  $name = $_GET['name'];

                  switch ($name) {

                      case "creative_writing":
                          
                            $service_name = 'Creative Writing';
                            $service_short_content = 'We break the barriers of awesome content with our insightful creative writing services. Hire us for escalating profits.';

                            $service_long_content = 'NULL';

                          break;

                      case "technical_writing":
                          
                            $service_name = 'Technical Writing';
                            $service_short_content = 'Not regular writers can excel at technical writing. You can depend on our quality and apt technical writers.';
                            $service_long_content = '';
                                                  
                          break;

                      case "product_description":
                          
                            $service_name = 'Product Description &amp; Reviews';
                            $service_short_content = 'Let us build trust for your brand by transforming your visitors into clients. We help your business escalate.';
                            $service_long_content = '';
                                                  
                          break;

                      case "ebooks":
                          
                            $service_name = 'E-Books';
                            $service_short_content = 'Our professional ghostwriters work with full dedication in bringing out the best in overflowing the pages with value. ';
                            $service_long_content = '';
                                                  
                          break;


                      case "white_paper":
                          
                            $service_name = 'White Papers';
                            $service_short_content = 'Our professionally formatted white papers will convert the target audience into assets and escalate your sales cycle. ';
                            $service_long_content = '';
                                                  
                          break;
                      
                      case "resume_cover_letters":
                          
                            $service_name = 'Resumes &amp; Cover Letters';
                            $service_short_content = 'Our expert writers ace at using the power of words in cracking the coveted interviews by the cover letters and resumes made by us.';
                            $service_long_content = '';
                                                  
                          break;

                      case "slogans_taglines":
                          
                            $service_name = 'Slogans &amp; Taglines';
                            $service_short_content = 'We help your business with tantalizing taglines which boosts up your brand and slogans which people can relate and learn from.';
                            $service_long_content = '';
                                                  
                          break;

                      case "banner_creation":
                          
                            $service_name = 'Banner Creation';
                            $service_short_content = 'Create Stunning Banners with Joxbe. Fuel your business with the professional quality banners for your blog posts and social media profiles to increase your Visual charm.';
                            $service_long_content = '';
                                                  
                          break;

                      case "logo_creation":
                          
                            $service_name = 'Logo Creation';
                            $service_short_content = 'With a mission to make your website look stunning, we create tempting Logo which reflects the soul of your business.';
                            $service_long_content = '';
                                                  
                          break;

                      case "personal_bio":
                          
                            $service_name = 'Personal Biography Services';
                            $service_short_content = 'We transform your story into a beautiful book. We use compelling narration with the power of words and tell your story like never before.';
                            $service_long_content = '';
                                                  
                          break;                                                       
                      case "info_asset_design":
                          
                            $service_name = 'Infographics &amp; Asset Design';
                            $service_short_content = 'Let onboard Visual Content Marketing help you increase your business: We design everything you demand.';
                            $service_long_content = '';

                          break;

                      case "email_newsletters":
                          
                            $service_name = 'E-Mails &amp; Newsletters';
                            $service_short_content = 'Push your prospects into notice by our experienced e-mail and newspaper writing services which will get the work done.';
                            $service_long_content = '';
                                                  
                          break;

                      case "articles":
                          
                            $service_name = 'Articles';
                            $service_short_content = 'Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.';
                            $service_long_content = '';
                                                  
                          break;

                      case "blogs":
                          
                            $service_name = 'Blogs';
                            $service_short_content = 'Escalate search exposure with supreme quality blog content that emphasizes on storytelling visually to attract numerous visitors. ';
                            $service_long_content = '';
                                                  
                          break;


                      case "web_content":
                          
                            $service_name = 'Web Content';
                            $service_short_content = 'Let us give your website a makeover from an ordinary and lame content to tempting and engaging one. The power of words is at your service.';
                            $service_long_content = '';
                                                  
                          break;
                      
                      case "press_release":
                          
                            $service_name = 'Press Releases';
                            $service_short_content = 'The excelling team of Joxbe will let you have the power of marketing tool in form of quality content in press releases.';
                            $service_long_content = '';
                                                  
                          break;

                      case "video_production":
                          
                            $service_name = 'Video Production';
                            $service_short_content = 'Steal the attention of the audience through eye catching videos that excel in providing smooth communication of your ideas in form of visuals.';
                            $service_long_content = '';
                                                  
                          break;

                      case "copywriting":
                          
                            $service_name = 'Copywriting';
                            $service_short_content = 'Let our magic of copywriting help your brand in reaching the heights of engaging traffic. Our experts will help you at all times.';
                            $service_long_content = '';
                                                  
                          break;

                      case "script_writing":
                          
                            $service_name = 'Script Writing';
                            $service_short_content = 'Do you desire your promo audios and videos to get scripted? Let us help you with it in an emotional and influential Oscar worthy manner.';
                            $service_long_content = '';
                                                  
                          break;

                      case "social_media_content":
                          
                            $service_name = 'Social Media Content';
                            $service_short_content = 'Fire up your website with organic traffic with our awesome and engaging social media content which will fuel your business.';
                            $service_long_content = '';
                                                  
                          break;

                      default:
                          $service_name =  "Neither of our Services are selected lookUp in the Search bar";
                          $service_short_content = "Nothing to look for ... ";
                          $service_long_content = 'Nothing to look for ... ';
                  }


                  echo "<div class='tab-content'>
                              <div class='tab-pane active' id='support'>
                              <div class='panel-group' id='accordion'>
                                <div class='panel panel-default'>
                                  <div class='panel-heading'>
                                    <h4 class='panel-title font-alt'><a data-toggle='collapse' data-parent='#accordion' href='#support1'> $service_name </a></h4>
                                  </div>
                                  <div class='panel-collapse collapse in' id='support1'>
                                    <div class='panel-body'> $service_short_content </div>
                                  </div>
                                </div>
                                <div class='panel panel-default'>
                                  <div class='panel-heading'>
                                    <h4 class='panel-title font-alt'><a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#support2'>More</a></h4>
                                  </div>
                                    <div class='panel-collapse collapse' id='support2'>
                                      <div class='panel-body'>
                                      <!--  explaination  -->
                                       $service_long_content
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>  
                            </div>
                  ";

                ?>

                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest blog posts</h2>
                <div class="module-subtitle font-serif">Joxbe blogs with intent to provide value with quality. We understand the target audience and the type of content they crave and the issues they go through and need help to solve them. The SEO Experts at Joxbe, put the quality as the roots of fueling the brand.</div>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
             
            <?php
                
                include("php/config.php");
                $sql = "SELECT * FROM joxbe_blog_image_register ORDER BY id DESC LIMIT 3";
                $result = mysqli_query($db,$sql);
                
                while($row = mysqli_fetch_array($result)){
                    
                  echo  "<div class='col-sm-6 col-md-4 col-lg-4'>";
                  echo  "<div class='post'><div class='post-thumbnail'>";
                  echo  "<img src='assets/images/blogs/". $row['image'] ."' alt='Blog-post Thumbnail'/>";
                  echo  "</div><div class='post-header font-alt'><h2 class='post-title'>";
                  echo  "<a href='blog_single_left_sidebar.php?id=". $row['id'] ."'>". $row['header'] ."</a></h2>";
                  echo  "<div class='post-meta'>By&nbsp;". $row['bloger_name'] ."&nbsp;". $row['blog_timestamp'];
                  echo  "</div></div></div></div>";
                }

            ?>

            </div>
          </div>
        </section>

        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Joxbe</h5>
                  <p>Let your website set apart from the crowd with our Maven Services.Joxbe knows the search engines and your readers.</p>
                  <p>Let’s create something huge for you!</p>
                  <p>Phone: +91 - 9936649666</p>
                  <p>
                  <a href="https://www.facebook.com/Joxbe-1735913369860884/"><i class="fa fa-facebook"></i>
                  </a><a href="https://twitter.com/Joxbe1"><i class="fa fa-twitter"></i></a>
                  </p>
                  <p>Email: ContactJoxbe@gmail.com</p>
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
                       ORDER BY joxbe_blog_image_register.id DESC LIMIT 6
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