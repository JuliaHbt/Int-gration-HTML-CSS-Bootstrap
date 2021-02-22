<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="bepro.css"  rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <title>BePro</title>
  </head>


<body>
                                       
            <!-- HEADER -->
                 <header>
                    <?php include('header.php'); ?>
                 </header>
            <!-- HEADER -->


<!-- CAROUSEL -->
<div class="carousel-container container">
<div id="carouselExampleControls" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
  <div id="carousel" class="carousel-inner">

    <div class="carousel-item active">
      <img src="medias/madame.png" class="img-fluid z-index:1 img-carousel" alt="...">
    </div>

    <div class="carousel-item">
       <img src="medias/madame.png" class="img-fluid z-index:1 img-carousel" alt="...">
    </div>

                <!--BOUTON BUYNOW & New Arrival -->
         
                <div class="position-absolute top-50 start-50 translate-middle">
                   <p class="playfair text-white display-3 fw-bold">New Arrival</p>
            </div>

            <div class="position-absolute top-60 start-50 translate-middle">
            <nav class="nav"> <a class="nav-link button-blue montserrat fs-6"  href="beproproduct.php">BUY NOW</a> </nav>
            </div>

          <!--FIN BOUTON & New Arrival -->

  </div>
  <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</a>
  <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</a>

</div>
</div>
<!-- FIN CAROUSEL -->

  <!-- BANNER -->  
<div class="filoutance">
  <div class="container freeshipping">

<div class="row pt-4 pb-3 text-center">

 <!-- FREE SHIPPING -->  
    <div class="col-sm">
       <div class="row border-row">
          <div class="col-sm-3">
              <img class="img-banner img-fluid" src="medias/Iconfreeship.png" alt="">
          </div>
       <div class="border-banner col-sm-9 montserrat fs-6">
            <p>Free Shipping</p>
            <p class="grey-text">Oders over $99</p>
          </div>
   </div>
</div>

 <!-- 30 DAYS -->  
 <div class="col-sm">
    <div class="row border-row">
            <div class="col-sm-3">
                <img class="img-banner img-fluid" src="medias/icon30days.png" alt="">
            </div>
       <div class="border-banner col-sm-9 montserrat fs-6">
               <p>30 days return</p>
               <p class="grey-text">If goods have problem</p>
            </div>
    </div>
</div>

 <!-- SECURE PAYMENT -->  
 <div class="col-sm">
    <div class="row border-row">
            <div class="col-sm-3">
                   <img class="img-banner img-fluid" src="medias/iconpayment.png" alt="">
            </div>
       <div class="border-banner col-sm-9 montserrat fs-6">
                <p>Secure payment</p>
                <p class="grey-text">100% secure payment</p>
            </div>
    </div>
</div>

 <!-- 24H SUPPORT -->  
 <div class="col-sm">
    <div class="row border-row">
            <div class="col-sm-3">
            <img class="img-banner img-fluid" src="medias/iconSupport.png" alt="">
            </div>
       <div class="col-sm-9 montserrat fs-6">
               <p>24H Support</p>
               <p class="grey-text">Dedicated Support</p>
            </div>
    </div>
</div>


</div>
</div> 
</div>
       <!-- FIN FREE SHIPPING -->




                <!--FIRST LINE -->
       <div class="firstline container mt-4 mb-4">

  <div class="row">

    <div id="popular-product" class="col-md">
      <a href="beproproduct.php">
       <img class="mt-4 img-fluid img-shirt" src="medias/popularproduct2.png" alt="Popular Product">
       </a>
    </div> &emsp;

    <div class="box col-md">
<div class="row">
<div class="col-sm-10">
    <a href="beproproduct.php">
      <img class="img-fluid img-shirt" src="medias/shirt1.png" alt="">
      </a>
  </div>
      <div class="col-2 pt-1">
      <p class="button-sale montserrat fs-6 fw-bold">sale</p>
    </div>
</div>

<div class="row">
      <p class="fs-5 playfair">Essential cotton-blend</p>
      <p class="montserrat fs-6 blue-text"><span class="grey-text text-decoration-line-through">$200.000 USD</span> &emsp; $100.00 USD</p>
</div>

    </div> &emsp;

    <div class="box col-md">
    <a href="beproproduct.php">
     <img class="img-fluid img-shirt" src="medias/shirt2.png" alt="Popular Product">
     </a>
     <p class="fs-5 playfair">Flecked cotton blend</p>
     <p class="montserrat fs-6 blue-text">$175.00 USD</p>
  </div> &emsp;

    <div class="box col-md">
    <a href="beproproduct.php">
      <img class="img-fluid img-shirt" src="medias/shirt3.png" alt="">
      </a>
      <p class="fs-5 playfair">Striped cotton t-shirt</p>
      <p class="montserrat fs-6 blue-text">$200.00 USD</p>
    </div>

  </div>
</div>
            <!--END FIRST LINE -->



<!--SECOND LINE -->

<div class="secondline container mt-4 mb-4">
  <div class="row pl-3">

    <div class="box col-sm">
       <a href="beproproduct.php">
          <img class="img-fluid img-shirt" src="medias/shirt4.png" alt="Tshirt rouge rayé">
       </a>
      <p class="fs-5 playfair">V-neck cotton t-shirt</p>
      <p class="montserrat fs-6 blue-text">$100.00 USD</p>
    </div> &emsp;

    <div id="lifestyle" class="col-lg-9">
        <p class="blue-text-button montserrat fs-6 fw-bold">new</p><br>
        <p class="montserrat text-white fs-6">LIFESTYLE</p>
        <p class="playfair text-white fs-4  fw-bold">New Now : Striped cotton</p>      
        <nav class="nav"> 
          <a class="nav-link fw-bold blue-text-nav montserrat fs-6"  href="beproproduct.php">$50.00 USD &emsp; | &emsp; BY NOW</a> 
        </nav>
      </div>
    </div>

    
  </div>
</div>

<!-- END SECOND LINE -->



                       <!--THIRD LINE -->
<div class="thirdline container mt-4 mb-4">

<div class="row">

  <div class="box col-md">
      <a href="beproproduct.php">
         <img class="img-fluid img-shirt" src="medias/juperose.png" alt="Popular Product">
      </a>
     <p class="fs-5 playfair">Message cotton t-shirt</p>
     <p class="montserrat fs-6 blue-text">$100.00 USD</p>
  </div> &emsp;


  <div class="box col-md">
  <div class="row">
  <div class="col-sm-10">
     <a href="beproproduct.php">
       <img class="img-fluid img-shirt" src="medias/pullbleu" alt="">
    </a>
</div>
<div class="col-2 pt-1">
      <p class="button-sale montserrat fs-6 fw-bold">sale</p>
    </div>
</div>
<div class="row">
    <p class="fs-5 playfair">Sequin star t-shirt</p>
    <p class="montserrat fs-6 blue-text"><span class="grey-text text-decoration-line-through">$200.000 USD</span> &emsp; $100.00 USD</p>
</div>
  </div> &emsp;


  <div class="box col-md">
      <a href="beproproduct.php">
         <img class="img-fluid img-shirt" src="medias/chalerose" alt="">
      </a>
    <p class="fs-5 playfair">Ruffle sleeve t-shirt</p>
    <p class="montserrat fs-6 blue-text">$175.00 USD</p>
  </div> &emsp;

  <div class="box col-md">
        <a href="beproproduct.php">
              <img class="img-fluid img-shirt" src="medias/imageproduct1.png" alt="">
        </a>
    <p class="fs-5 playfair">Double layer top</p>
    <p class="montserrat fs-6 blue-text">$200.00 USD</p>
  </div>

</div>
</div>

                          <!--END THIRD LINE -->
  <!--FIN POPULAR PRODUCT -->


<!--EVENT CAROUSEL -->


<div id="event" class="carousel-container container mb-5 mt-5">
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="img-fluid" src="medias/girlS.png" alt="">
      <div class="position-absolute top-50 start-50 translate-middle">
    <p class="montserrat text-white h6 text-center fw-light">EVENT</p>
      <p class="playfair text-white fs-4 text-center fw-light">London Fashion Week September 2017</p>
      <p class="montserrat text-white h6 text-center fw-light">15th-19th September 2017</p>
   </div>
   </div>

    <div class="carousel-item">
    <img class="img-fluid" src="medias/girlS.png" alt="">
      <div class="position-absolute top-50 start-50 translate-middle">
    <p class="montserrat text-white h6 text-center fw-light">EVENT</p>
      <p class="playfair text-white fs-4 text-center fw-light">London Fashion Week September 2017</p>
      <p class="montserrat text-white h6 text-center fw-light">15th-19th September 2017</p>
   </div>
    </div>

  </div>
  <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</a>
  <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</a>

</div>
</div>

<!--FIN CAROUSEL EVENT -->



    
            <!-- FOOTER -->
            <header>
                    <?php include('footer.php'); ?>
                 </header>
            <!-- FOOTER -->

                                                               
  </body>
</html>