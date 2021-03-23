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
      <!-- Navbar Section -->
    <header class="header">
        <nav class="navbar navbar-expand-rg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand fontConf" href="#">ADAM</a>
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
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
        <!--End Navbar Section -->
        <!--Image title Section -->
        <div class="container-fluid imageSection d-flex flex-column justify-content-center align-items-center">
                            <div class="text-center text-black titleSection p-5">
                    <h2 class="display-4 ">
                        MINIMAL PORTFOLIO
                        <h6>
                            portfolio for creatives
                        </h6>
                    </h2>
                </div>
            </div>
        <!-- End Image title Section -->  

        <!--content Setion -->
            <!--Widget Area -->
            <div class="container my-5 align-items-center">

                <h1 class="text-center">widget custom post</h1>
                <?php
                  $homepagePortfolio = new WP_Query(array(
                    'post_per_page' => 4,
                    'post_type' => 'post_type_portafolio'
                  ));

                  ?>
                  
                  <div class="  card-group d-flex align-items-center justify-content-center ">

                  
                  <?php
                  
                  while($homepagePortfolio->have_posts()){
                    $homepagePortfolio->the_post(); ?>
                     <div class=" row g-2 somepading align-items-center d-flex justify-content-center row-cols-md-3 ">
                      <div class="card d-flex  col-xs-12 align-items-center " style="width: 18rem;">
                         <div ><?php the_post_thumbnail('thumbnail'); ?></div>
                        <div class="card-body">
                        <a href="<?php the_permalink() ?>">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        </a>
                          
                          <p class="card-text"><?php echo wp_trim_words( get_the_content(),10 )?></p>
                        </div>
                      </div>
                    </div> 

                      

                      

                     
                     <?php
                  }
                ?>
                 </div>
                <hr>
            </div>
            <!--End Widget Area -->

            <!--Post rows Area -->
             <div class="container-fluid my-5 postArea  d-flex flex-column justify-content-center align-items-center">
              <div class="container my-5 postArea  d-flex flex-column justify-content-center align-items-center">
                <h1 class="titles text-center">
                    POST DINAMICOS ACTUALIZADOS
                    <hr>                         
                </h1>
                <hr>
                <h6 class=" d-flex align-items-center">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                
                </h6>

                <div class="row p-3">
                
                    <!--Row Cards Section  -->
                    <div class="container my-5 align-items-center">
                <h1 class="text-center"> Dynamic post </h1>
                <?php
                  $homepagePost = new WP_Query(array(
                    'post_per_page' => 3,
                    'post_type' => 'post'
                  ));
                  ?> 
                  <div class="  card-group d-flex align-items-center justify-content-center  "> 
                  <?php
                  while($homepagePost->have_posts()){
                    $homepagePost->the_post(); ?>
                    <div class=" row g-2 somepading align-items-center d-flex justify-content-center row-cols-md-3 ">
                      <div class="card d-flex  col-xs-12 align-items-center" style="width: 18rem;">
                        <div ><?php the_post_thumbnail('thumbnail'); ?></div>
                        <div class="card-body">
                          <h5 class="card-title"><?php the_title(); ?></h5>
                          <p class="card-text"><?php echo wp_trim_words( get_the_content(),20 )?></p>
                        </div>
                        <div class="card-footer">
                          <a href="<?php the_permalink() ?>">
                          <small class="text-muted">read more</small>
                          </a>                           
                        </div> 
                      </div>
                    </div>      
                    <?php
                  }
                ?>
                </div>
                <hr>
                </div>
            <!-- End Post rows Area -->
                                
            </div>
            </div>
            
        <!--End content Section -->
        
        <!--Footer Section -->
            <div class="container-fluid text-black py-3 footerColor">
                <div class="containter text-center">
                  <div>
                    <h3 class="container ">
                      ADAM 
                      <hr>
                      <h5>  </h5>

                    </h3>
                    

                  </div>
                    
                    <!--Social media Icons -->
                </div>
                <div class="container  d-flex flex-column justify-content-center align-items-center">
                  <div class="row">

                    <div>
                      <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                      <br>
                      <small class="align-items-center" >ALL © RESERVED <small class="blueText">WPDNA</small></small>
                    </div>
                  </div>
                </div>
            </div>
            <!--End Social media Icons -->
        <!--End footer Section -->
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <?php wp_footer(); ?>
  </body>
</html>