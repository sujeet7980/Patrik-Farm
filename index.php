<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=hn, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
  
  <?php
  require 'header.php';
 ?>   

  </div>
  <header>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/13.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block " style="color:white; font-size: 54px; margin-bottom: 200px;">
                  <img src="images/31.png" alt="" style="width: 150px; height: 150px; filter: invert(100%);">
                  <h1 >Horticulture Management</h1>
                  <H1>MAKE FARMER INCREASE PROFIT</H1>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="images/7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block " style="color:white; font-size: 54px; margin-bottom: 200px;">
                  <img src="images/31.png" alt="" style="width: 150px; height: 150px; filter: invert(100%);">
                  <h1 >Horticulture Management</h1>
                  <H1>MAKE FARMER INCREASE PROFIT</H1>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </header>
      <section class="main_heading my-5">
        <div class="text-center">
           <h1 class="display-4">LET KNOW SOMETHING!!</h1>
           <hr class="w-25 mx-auto" />
        </div>
        <div class="container my-5">
          <div class="row">
               <div class="col-lg-6 col-md-6 col-12 col-xxl-6  ">
                   <figure>
                     <img src="images/14.jpg" alt="about images" class="about-img" style="margin-left: 300px;">
                   </figure>
               </div>
               <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column">
                       <h1>HISTORY OF HORTICULTURE</h1>
                       <p>The study and practice of horticulture are traced back to the times of Cyrus the Great of ancient Persia
                          and continues to be a part of today’s society with present-day horticulturists such as Freeman S. Howlett 
                          and Luther Burbank. The origins of horticulture lie in the transition of human communities from a nomadic 
                          lifestyle as hunter-gatherers to sedentary, or semi-sedentary, horticultural communities.
                       </p>
                       <div class="text-center my-3">
                        <a class="btn btn-primary" href="about.php" role="button">View more</a>
                      </div>
              </div>
          </div>    

        </div>

      </section>
      <section class="main_heading my-5 bg-light py-3" id="services">
        <div class="text-center">
           <h1 class="display-4">Services</h1>
           <hr class="w-25 mx-auto" />
        </div>
           <div class="row p-5">
           <div class="col-md-4 col-10 col-xxl-4 m-auto">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4" style="width:100%;">
                    <img src="images/19.jpg" class="img-fluid h-100 w-100 " alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" >
                      <h3 class="card-title">Gardening Plants</h3>
                      <p class="card-text">Gardening adds years to your life,and life to your years.</p>
                      <a class="btn btn-primary" href="plants.php" role="button">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-10 col-xxl-4 m-auto">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4" style="width:100%;">
                    <img src="images/20.jpg" class="img-fluid h-100 w-100 " alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title">Seeds</h3>
                      <p class="card-text">To grow healthy plants, One definitely needs healthy seeds.</p>
                      <a class="btn btn-primary" href="seeds.php" role="button">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-10 col-xxl-4 m-auto">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4" style="width:100%;">
                    <img src="images/21.jpg" class="img-fluid h-100 w-100 " alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title">Tools</h3>
                      <p class="card-text">For maintaining plants, one needs excellent quality tools and accessories.</p>
                      <a class="btn btn-primary" href="tool.php" role="button">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           </div> 
           
            
            
          </div>
        </div>
      </section>
      <section class="main_heading my-5 " id="gallery">
        <div class="text-center">
           <h1 class="display-4">GALLERY</h1>
           <hr class="w-25 mx-auto" />
        </div>
        <div class="container">
          <div class="row gy-2">
            <div class="col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              <img src="images/1.jpg" alt="images">
            </figure>
           </div>
           <div class="col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              <img src="images/2.jpg" alt="images">
            </figure>
           </div>
           <div class="col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              <img src="images/3.jpg" alt="images">
            </figure>
           </div>
           <div class="col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              <img src="images/4.jpg" alt="images">
            </figure>
           </div>
           <div class="col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              <img src="images/5.jpg" alt="images">
            </figure>
           </div>
           <div class="col-md-4 col-10 col-xxl-4 mx-auto">
            <figure>
              <img src="images/15.jpg" alt="images">
            </figure>
           </div>
          </div>
          <div class="text-center my-3">
            <a class="btn btn-primary" href="gallery.html" role="button">View more</a>
          </div>
       </div>
      </section>
      <section class="main_heading my-5 bg-light py-3">
      <div class="text-center">
           <h1 class="display-4">About</h1>
           <hr class="w-25 mx-auto" />
        </div>

      </section>
      <br><br><br>
      <div>
        <?php
        require'footer.php';
        ?>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    
</body>
</html>