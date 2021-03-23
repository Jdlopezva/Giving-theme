<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Own Style CSS -->
    <link rel="stylesheet" href="style.css">
    
    <?php wp_head(); ?>

  </head>

  <body>
 <!--Header Section -->
  <header class="header">
        <nav class="navbar navbar-expand-rg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ADAM</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </header>

    <div>
      <h1 class="text-center somepading toppading">Single post</h1>

    </div>
    <!-- The sidebar -->
    <div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-widget">
          <!--Import Sidebar widget to show  -->
        <div class="continer-widget-title"> <?php  dynamic_sidebar('sidebar-post');?></div>  
        </div>
        
    </nav>

    <!-- Page Content -->
    <div class="containter">
    <div id="content w-50 ">
    <?php 
    // the query of post variables
    $the_query = new WP_Query(array(
    //post current post variables
      'paged' => get_query_var( 'paged'),
      'posts_per_archive_page' => 1
      )
    ); ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
 
    <!-- importing post variables to front -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2 class="text-center"><?php the_title(); ?></h2>
        <div class="d-flex align-items-center justify-content-center">
          <div ><?php the_post_thumbnail('thumbnail'); ?></div>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
    <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <div class="content-widget center-text">
      <div class="content-title"> <?php  dynamic_sidebar('content-post');?>
      </div>
    </div>

    <h5 class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
      
        <!-- bring the fields of the post dynamicly -->
    </div>
    </div>


    </div>  
    <!-- Page content -->
    <div class="content">
      <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
    </div>

	        <!--Footer Section -->
          <div class="container-fluid text-black py-3 footerColor">
                <div class="containter text-center">
                  <div>
                    <h3 class="container ">
                      ADAM 
                      <hr>
                      <h5>  </h5>

                    </h3>
                    
              <!--All reserved -->
                  </div>
                </div>
                <div class=" d-flex flex-column justify-content-center align-items-start">
                  <div class="row">
                    <div class="d-flex align-items-start flex-column">
                      <small >ALL © RESERVED <small class="blueText">WPDNA</small></small>
                    </div>
                    </div>
                </div>
              <!--Social media Icons -->
                <div class=" d-flex flex-column justify-content-center align-items-end">
                  <div class="row">
                  <div class="align-items-end">
                      <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                      </ul>                     
                    </div>
                    </div>
                </div>


            </div>
        <!--End footer Section -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>
