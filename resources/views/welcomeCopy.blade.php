<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crime Reporting Portal - Home</title>
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
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#mw">Most Wanted</a></li>
          <li><a href="#mr">News Room</a></li>
          @hasrole('admin') 
          <li><a href="{{route('dashboard1')}}">Dashboard</a></li>
          @endhasrole

          @hasrole('police')      
          <li><a href="{{route('dashboard1')}}">Dashboard</a></li>
          @endhasrole
          
         
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
      <h1>Welcome to Crime Reportig Portal</h1>
      <h2>“Criminals should be punished, not fed pastries.”</h2>
    <!-- <a href="'{{url('/view/complaint')}}" class="btn btn-light btn_change">Send Location in Emergency</a> -->
      <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">


      
        <div class="row">
        <a href="{{route('register')}}">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class='bx bxs-user-circle'></i></div>
              </a>

              <h4 class="title"><a href="{{route('register')}}">Register</a></h4>
               <a href="{{route('register')}}">
              <p class="description">Only the Register users can use the website facilties.</p>
              
            </div>
         
          </div>
          </a>
          <a href="{{route('login')}}">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bx-log-in'></i></div>
              <h4 class="title"><a href="{{route('welcome')}}">Login</a></h4>
              <p class="description">If you already Register, Please Login and use the website.</p>
            </div>
          </div>
          </a>
          <a href="/documentaries">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class='bx bxs-video-plus'></i></div>
              <h4 class="title"><a href="/documentaries">Documentaries</a></h4>
              <p class="description">If you wants to see any documentaries regarding criminal investigation
                documentaries etc.</p>
            </div>
          
          </div>
          </a>
          <a href="/selfdefence">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class='bx bxs-videos'></i></div>
              <h4 class="title"><a href="">Self-defence tips and tutorials</a></h4>
              <p class="description">if user want to see self-prevention and defence videos</p>
            </div>
          </div>
          </a>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  bg-light">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class='bx bxs-plus-circle'></i>
              <span data-toggle="counter-up">319,031</span>
              <p><strong>Total Complaints</strong>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class='bx bxs-checkbox-checked'></i>
              <span data-toggle="counter-up">241,580</span>
              <p><strong>Redressed</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class='bx bx-loader-circle'></i>
              <span data-toggle="counter-up">9,312</span>
              <p><strong>In Process</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class='bx bx-recycle'></i>
              <span data-toggle="counter-up">309,719</span>
              <p><strong>Disposed</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>IN CASE OF EMERGENCY CALL, <strong class="onefive">15</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="mw" class="testimonials bg-light">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Most Wanted</h2>

        </div>

        <div class="owl-carousel testimonials-carousel ">

          <div class="testimonial-item" data-aos="fade-up">
            <p class="bac">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Other name(s): Samad, Ustaad Talha<br>Head money: Rs10,000,000<br>Major crime(s): Involved in suicide
              Attack on then Prime Minister of Pakistan Shaukat Aziz, Civil Lines Karachi bomb blast.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="dist/img/mati.png" class="testimonial-img" alt="">
            <h3>Mati-ur-Rehman</h3>

          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p class="bac">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Other name(s): Ibrahim, Chotta Ibrahim, Hasaan <br>Head money: Rs5,000,000<br>Major crime(s): Involved in
              suicide Attack on then President of Pakistan Pervez Musharraf.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="dist/img/mansoor.png" class="testimonial-img" alt="">
            <h3>Mansoor</h3>

          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p class="bac">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Other name(s): Basit, Ustaad Huzaifa<br>Head money: Rs5,000,000<br>Major crime(s): Involved in suicide
              Attack on then President of Pakistan Pervez Musharraf.Affiliated with: Lashkar-e-Jhangvi (LJ)
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="dist/img/qari.png" class="testimonial-img" alt="">
            <h3>Qari Ehsan ul Haq</h3>

          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p class="bac">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ther name(s): Fazal Ullah, Noor Khan<br>Head money: Rs5,000,000<br>Major crime(s): Attack on Saddar
              Kabirwala district, Khanewal, 2005<br>Affiliated with: Jaish-i-Muhammad (JM)
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="dist/img/rana.png" class="testimonial-img" alt="">
            <h3>Rana Muhammad Afzal</h3>

          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p class="bac">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Other name(s): Mugheera, Farooq <br>Head money: Rs2,500,000<br> Major crime(s): Involved in ISI Qasim
              Bela, Multan<br> Affiliated with: Lashkar-e-Jhangvi (LJ)/Tehreek-i-Taliban Pakistan (TTP)
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="dist/img/zubair.png" class="testimonial-img" alt="">
            <h3>Muhammad Zubair</h3>

          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>IGP POLICE COMPLAINT CENTER, <strong class="onefive">8787</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- MOST NEWS -->
    <section id="mr">
      <!-- first div start -->
      <div class=" mt-0">

        <!-- container start -->
        <div class="container">
          <h2 class="text-center mb-3">NEWS ROOM</h2>
          <div class="row mt-4">
            <div class="col-md-4">
              <!-- Card -->
              <div class="card booking-card card_changed">


                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h6 class="card-title font-weight-bold"><a>USE OF INFORMATION TECH KEY IN MODERN POLICING: IGP</a>
                  </h6>
                  <p class="para_text">November 12, 2020</p>

                  <!-- Text -->
                  <p class="card-text text-justify">Presiding over a meeting on IT projects of Punjab Police at Central
                    Police Office here,
                    he said that at the same time, effective monitoring and inspection of these IT projects should be
                    ensured.
                    The IG Punjab formally approved the launch of three innovative applications jointly developed by IT
                    Wing of Punjab...</p>
                  <hr class="my-4">


                  <!-- Button -->
                  <a href="#"><button class=" btnnew">Read More</button></a>

                </div>

              </div>
              <!-- Card -->
            </div>
            <!-- md4 end -->
            <div class="col-md-4">
              <!-- Card -->
              <div class="card booking-card card_changed">




                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h6 class="card-title font-weight-bold"><a>GIRL’S MURDER CASE SOLVED; KILLER ARRESTED: POLICE</a></h6>
                  <p class="para_text">November 11, 2020</p>

                  <!-- Text -->
                  <p class="card-text text-justify">FAISALABAD: Police claim to have solved the murder case
                    of a girl who was found shot dead on Nov 5, arrested the killer and seized the murder weapon.
                    The body of the girl, identified as Kainat
                    – a student of MSc Zoology at the University of Agriculture Faisalabad (UAF), remained...</p>
                  <hr class="my-4">


                  <!-- Button -->
                  <a href="#"><button class=" btnnew">Read More</button></a>

                </div>

              </div>
              <!-- Card -->
            </div>
            <!-- md4 end -->
            <div class="col-md-4">
              <!-- Card -->
              <div class="card booking-card card_changed">




                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h6 class="card-title font-weight-bold"><a>IGP ANNOUNCES NEW POLICY FOR CRIME CONTROL</a></h6>
                  <p class="para_text">November 11, 2020</p>

                  <!-- Text -->
                  <p class="card-text text-justify">LAHORE: Inspector General of Police Inam Ghani has announced
                    a new policy for crime control. He made the announcement in ‘Police Senior Command Conference’
                    at the Central Police Office on Tuesday.
                    It was the first gathering of over 70 police officers, including heads of all...</p>
                  <hr class="my-4">


                  <!-- Button -->
                  <a href="#"><button class=" btnnew">Read More</button></a>

                </div>

              </div>
              <!-- Card -->
            </div>
            <!-- md4 end -->
          </div>
          <!-- row end -->

        </div>
        <!-- container end -->
      </div>
      <!-- first div end-->
    </section>
    <!-- MOST NEWS END -->
    <!-- fotter -->
    <section id="foot">
      <div class="container-fluid">
        <div class="container">
          <p class="text-center text-white mt-2">Crime Reporting Portal &#169; powered by: ZUR Software Production</p>
        </div>
      </div>
    </section>
    <!-- footer end -->
    <a href="#" class="back-to-top bg-danger"><i class="icofont-simple-up"></i></a>
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