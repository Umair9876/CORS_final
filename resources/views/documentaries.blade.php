<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crime Reporting Portal - Documentaries</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://www.easternshorepost.com/wp-content/uploads/2019/06/crime-icon.jpg" rel="icon">
  <link href="https://www.easternshorepost.com/wp-content/uploads/2019/06/crime-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="dist/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="dist/css/icofont/icofont.min.css" rel="stylesheet">
  <link href="dist/css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="dist/css/venobox/venobox.css" rel="stylesheet">
  <link href="dist/css/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="dist/css/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="dist/css/welcome.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.2.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

   <!-- google font style -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <!-- google font style end -->


    <style>
#fontnew {
    font-family: 'Nosifer', cursive;
    color: #D8050E;
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"><span class="brand-text font-weight-light" id="fontnew">CORS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="dist/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        
        
        <li class="active text-white"><a >Documentaries</a></li>
        <li><a href="/">Home</a></li>
          
          <li><a href="#CSI">Crime Scene</a></li>
          <li><a href="#TI">Theif Investigation</a></li>
          <li><a href="#CDI">CDI</a></li>
          
          @guest
          <li><a href="{{route('welcome')}}">Login</a></li>
          <li><a href="{{route('register')}}">Register</a></li>
          @else
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <li> <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                                                          document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
          </li>
          @endguest

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Documentaries</h1>
      <h2>“If you wants to see any documentaries regarding criminal investigation
                documentaries etc.”</h2>
    <!-- <a href="'{{url('/view/complaint')}}" class="btn btn-light btn_change">Send Location in Emergency</a> -->
      <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="CSI" class="services">
      <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>CRIME SCENE INVESTIGATIONS</h2>

        </div>
      
        <div class="row">
        <!-- one form -->
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://theavtimes.com/wp-content/uploads/2013/09/7-yr-old-shot-car-to-car.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Introduction to Crime Scenes</h5>
    <p class="card-text text-justify">Dr Ian Turner from the University of Derby introduces the concept of crime scenes.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.youtube.com/watch?v=JgzdhUAJrBA" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>



        <!-- one form end -->
          <!-- 2nd form -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://www.policechiefmagazine.org/wp-content/uploads/Crime-Scene-825x510.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">What happens at a crime scene? - Murdoch University</h5>
    <p class="card-text text-justify">While the genre can give us a fascinating insight into the fields of forensic toxicology.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.murdoch.edu.au/news/series/series-articles/analysing-the-truth-crime-law-and-forensics/what-happens-at-a-crime-scene" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
 

          <!-- 2nd form end -->

         <!-- 3rd form -->

         <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdWuUSrlnMhiwIKyat-ky6wFRbcixa--tLKvDsfT6W_rLkbslCGekAsZiyFeqGHAb6Bu4&usqp=CAU" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Forensics Detective Reviews Crime Scene Investigations</h5>
    <p class="card-text text-justify">Retired forensics detective Smith reviews crime scene investigations from films.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.murdoch.edu.au/news/series/series-articles/analysing-the-truth-crime-law-and-forensics/what-happens-at-a-crime-scene" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
         <!-- 3rd form end -->

          <!-- 4th form -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://i2-prod.cambridge-news.co.uk/incoming/article12091955.ece/ALTERNATES/s615/CSI-4.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Forensics Expert Examines 25 More Crime Scene</h5>
    <p class="card-text text-justify">Crime scene analyst examines more forensics investigations.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.youtube.com/watch?v=xJcNa2-jprs" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
          <!-- 4th form end -->

      </div>
    </section><!-- End Services Section -->
    

    

    <!-- ======= Cta Section ======= -->
    <section id="TI" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>IN CASE OF EMERGENCY CALL, <strong class="onefive">15</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->

<!-- Theif Investigation -->

<section id="services" class="services">
      <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>THIEF INVESTIGATION</h2>

        </div>
      
        <div class="row">
        <!-- one form -->
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://www.pandasecurity.com/en/mediacenter/src/uploads/2017/08/pandasecurity-MC-types-hackers.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Identity Theft Investigations</h5>
    <p class="card-text text-justify">Identity theft is when someone uses another person's personal information.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.pinow.com/investigations/identity-theft" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>



        <!-- one form end -->
          <!-- 2nd form -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoOSIFoUqKWeNPwSi803fxgk5_VGqKqCHM-0tay_HgQNB852YGsNttVSvTnyGV1y9vTpY&usqp=CAU" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Federal Bureau of Investigation (FBI) Art Theft</h5>
    <p class="card-text text-justify">rt and cultural property crime—which includes theft, fraud etc.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.fbi.gov/investigate/violent-crime/art-theft" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
 

          <!-- 2nd form end -->

         <!-- 3rd form -->

         <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://www.irishtimes.com/polopoly_fs/1.2319899.1439828040!/image/image.jpg_gen/derivatives/box_620_330/image.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">How to Conduct a Workplace Investigation</h5>
    <p class="card-text text-justify">You must establish procedures for company to undertake an ETI.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://smallbusiness.chron.com/conduct-workplace-investigation-employee-theft-16652.html" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
         <!-- 3rd form end -->

          <!-- 4th form -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://asginvestigations.com/corporate/wp-content/uploads/sites/5/2019/03/theft-in-workplace.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Fighting Public Corruption</h5>
    <p class="card-text text-justify">DiNapoli is committed to fighting public corruption, encourages the public to help fight fraud and abuse.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.osc.state.ny.us/investigations" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
          <!-- 4th form end -->

      </div>
    </section>

<!-- Theif Investigation -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>IGP POLICE COMPLAINT CENTER, <strong class="onefive">8787</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->

   <!-- Criminal defense investigations. -->
   <section id="CDI" class="services">
      <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>CRIMINAL DEFENSE INVESTIGATION</h2>

        </div>
      
        <div class="row">
        <!-- one form -->
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="data:image/jpeg;base64,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" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Criminal Defense & Investigations</h5>
    <p class="card-text text-justify">Sullivan & Cromwell's Criminal Defense & Investigations Group (CDIG) is adept at resolving issues.</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.sullcrom.com/Criminal-Defense-and-Investigations-Practices" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>



        <!-- one form end -->
          <!-- 2nd form -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://investigatesc.com/wp-content/uploads/2013/12/slide-criminaldefense1.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Criminal Defense Investigation Training Council</h5>
    <p class="card-text text-justify">Investigation Training and Certification for public Defender investigators.</p>
  </div>
  
  <div class="card-body">
   
    <a href="http://www.cditctraining.com/" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
 

          <!-- 2nd form end -->

         <!-- 3rd form -->

         <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://www.pilum.com/wp-content/uploads/2017/07/Deep-Dive-Background-Investigation.jpg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Criminal Defense |Iowa Defense Investigations</h5>
    <p class="card-text text-justify">our Criminal Defense Investigation Specialists · Interviewing witnesses...</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.brookspi.com/criminal-defense" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
         <!-- 3rd form end -->

          <!-- 4th form -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card">
  <img class="card-img-top img-thumbnail" style="height:38%" src="https://images.squarespace-cdn.com/content/v1/57ba3b9e29687f1ef5ca5235/1475188739376-XM7Q8WHS73Q45AGSIVQ5/ke17ZwdGBToddI8pDm48kL4WrIntsHuCODFzGytxs8sUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKcw31z2cKmL83lZVTgYf1Shcnt0pzT4b-h8WwoQ3rX-86z0Q_QpJgDA4jmv5AtYw-J/image-asset.jpeg" alt="Card image cap">
  <div class="card-body text-white" style="background-color: #140D44">
    <h5 class="card-title">Investigations & White Collar Defense</h5>
    <p class="card-text text-justify">Our lawyers have experience in a wide range of criminal and regulatory areas</p>
  </div>
  
  <div class="card-body">
   
    <a href="https://www.jonesday.com/en/practices/investigations--white-collar-defense" class="card-link text-danger font-weight-bold">Click Here.!!</a>
  </div>
</div>
       </div>
          <!-- 4th form end -->

      </div>
      </section>

   <!-- Criminal defense investigations. -->
    <!-- fotter -->
    <section id="foot">
      <div class="container-fluid">
        <div class="container">
          <p class="text-center text-white mt-2">Crime Reporting Portal &#169; powered by: ZUR Software Production</p>
        </div>
      </div>
    </section>
    <!-- footer end -->
    
  </main>
  <!-- Vendor JS Files -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.easing/jquery.easing.min.js"></script>
  <script src="js/php-email-form/validate.js"></script>
  <script src="js/waypoints/jquery.waypoints.min.js"></script>
  <script src="js/counterup/counterup.min.js"></script>
  <script src="js/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="js/venobox/venobox.min.js"></script>
  <script src="js/owl.carousel/owl.carousel.min.js"></script>
  <script src="js/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>