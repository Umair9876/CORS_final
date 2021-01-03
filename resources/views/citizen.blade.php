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

     <!-- links of data table -->
     <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->
<!-- location button header files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>admin portal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
     crossorigin="anonymous">  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/> 
  

<!-- location button end -->

    <style>
#fontnew {
    font-family: 'Nosifer', cursive;
    color: #D8050E;
}
#mapid { height: 100px;
width: 100px }

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
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#fir">FIR Status</a></li>
          <li><a href="#cyber">Cyber Status</a></li>
          <li><a href="#anti">Anti-Bullying Status</a></li>
          <li><a href="#appointment">Appointment Status</a></li>
          <li><a href="#emergency">Emergency Location</a></li>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <li> <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                                                          document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to Crime Reportig Portal</h1>
      <h2>“Criminals should be punished, not fed pastries.”</h2>
      <a href="'{{route('location')}}" class="btn btn-light btn_change" data-toggle="modal" data-target="#Modal">Send Location in Emergency</a>
      <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->
<!-- location model start -->
<!-- model copy start -->
<div class="modal fade" id="Modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <form action="{{url('/register/complaint')}}" method="POST">
                    @csrf
                    <!-- Modal Header -->
                    <div class="modal-header text-white" style="background-color:#140D44">
                        <h4 class="modal-title">Complaint Registration</h4>
                        <button type="button" class="close text-white" data-dismiss="modal" >&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" >
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <!-- <form role="form"> -->
                            <div class="card-body">
            
            <div class="form-group" id="job">
            <div>
            <label for="" > Subject</label>
                    <input type="text" class="form-control" name="subject" required>

                    <label for="Area" > Area</label>
                    <input type="text" class="form-control" name="area" required>

                    <label for="" > Address</label>
                    <input type="text" class="form-control" name="address" required>

                    <label for="" > Contact</label>
                    <input type="text" class="form-control" name="contact" required>

                    <button onclick="getLocation()" class="btn btn-primary">My Location</button>
                    <div id="mapid" style="width: 600px; height: 400px; position: relative; outline: none;" 
                    class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag 
                    leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" 
                    style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane">
                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container 
                    leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                    <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2046/1361?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" 
                    class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, -347px, 0px); opacity: 1;">
                    <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2047/1361?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" class="leaflet-tile leaflet-tile-loaded" 
                    style="width: 512px; height: 512px; transform: translate3d(312px, -347px, 0px); opacity: 1;">
                    <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2046/1362?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" 
                    class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-200px, 165px, 0px); opacity: 1;">
                    <img alt="" role="presentation" src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/12/2047/1362?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" 
                    class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(312px, 165px, 0px); opacity: 1;"></div></div></div>
                    <div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"></div>
                    <div class="leaflet-pane leaflet-marker-pane"></div><div class="leaflet-pane leaflet-tooltip-pane"></div>
                    <div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.04805e+06px, 697379px, 0px) scale(4096);"></div></div>
                    <div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a>
                    <a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div>

            </div>
            
          </div>
            <div>
            <label for="Category">Category</label>
                    <select id="Category" name="Category" class="form-control" class=" float-left" required>
                            <option value="">choose..</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                    </select>

                    <label for="details" > Details</label>
                    <textarea name="details" id="" cols="100" rows="5" class="form-control" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success form-control">Register</button>
    
        </div>
    </div>
                                <!-- /.card-body -->

                                <!-- <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div> -->
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn text-white" style="background-color:#D8050E" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
          <!-- model end final -->

<!-- location model end -->

</div>


  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">


      
        <div class="row">
        
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#myModal">
         
          
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class='bx bxs-user-circle'></i></div>
              

              <h4 class="title"><a href="">Register FIR</a></h4>
          
              <p class="description text-white" >Only the Register users can use the website facilties.</p>
             
            </div>
           
          </div>

          <!-- model copy start -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header text-white" style="background-color:#140D44">
                        <h4 class="modal-title">FIR Registration</h4>
                        <button type="button" class="close text-white" data-dismiss="modal" >&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone NO</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter Phone no">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinc">CNIC</label>
                                        <input type="number" class="form-control" id="cinc" placeholder="Enter CNIC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="address" class="form-control" id="address1" placeholder="Pddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="placeofinci">Place of Incident</label>
                                        <input type="text" class="form-control" id="placeofinci"
                                            placeholder="Place of incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateofinci">Date/Time of Incident</label>
                                        <input type="datetime-local" class="form-control" id="dateofinci"
                                            placeholder="Date/Time of incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject of Incident</label>
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="subjectof incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Detail of Incident</label>
                                        <textarea name="" id="msg" cols="30" rows="5" class="form-control"></textarea>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn text-white" style="background-color:#D8050E" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
          <!-- model end final -->
          
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"  data-toggle="modal" data-target="#mymodal1">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bx-log-in'></i></div>
              <h4 class="title"><a href="">Register CYBER-CRIME</a></h4>
              <p class="description">If you already Register, Please Login and use the website.</p>
            </div>
          </div>
          
<!-- cyber-crime-model-start -->
<!-- The Modal -->
<div class="modal fade" id="mymodal1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header text-white" style="background-color:#140D44">
                        <h4 class="modal-title">Cyber Crime Report</h4>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone NO</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter Phone no">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinc">CNIC</label>
                                        <input type="number" class="form-control" id="cinc" placeholder="Enter CNIC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="address" class="form-control" id="address1" placeholder="Pddress">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="dateofinci">Date/Time Of Crime</label>
                                        <input type="datetime-local" class="form-control" id="dateofinci"
                                            placeholder="Date/Time  Of Crime">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject Of Crime</label>
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="subject Of Crime">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Detail Of Crime</label>
                                        <textarea name="" id="msg" cols="30" rows="5" class="form-control"></textarea>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button"  class="btn text-white" style="background-color:#D8050E" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<!-- cyber-crime-model-end -->


          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#myModal2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class='bx bxs-video-plus'></i></div>
              <h4 class="title"><a href="">ANTI-BULLYING</a></h4>
              <p class="description">If you wants to see any documentaries regarding criminal investigation
                documentaries etc.</p>
            </div>
          </div>

<!-- anti-bullying-model-start -->
 <!-- The Modal -->
 <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header text-white" style="background-color:#140D44">
                        <h4 class="modal-title">ANTI-Bullying Report</h4>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone NO</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter Phone no">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinc">CNIC</label>
                                        <input type="number" class="form-control" id="cinc" placeholder="Enter CNIC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="address" class="form-control" id="address1" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="placeofinci">Place of Incident</label>
                                        <input type="text" class="form-control" id="placeofinci"
                                            placeholder="Place of incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateofinci">Date/Time of Incident</label>
                                        <input type="datetime-local" class="form-control" id="dateofinci"
                                            placeholder="Date/Time of incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status of Incident</label>
                                        <select name="" id="status" class="form-control">
                                            <option value="critical">Critical</option>
                                            <option value="normal">Normal</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Detail of Incident</label>
                                        <textarea name="" id="msg" cols="30" rows="5" class="form-control"></textarea>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn text-white" style="background-color:#D8050E" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<!-- anti-bullying-model-end -->
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#myModal3">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class='bx bxs-videos'></i></div>
              <h4 class="title"><a href="">APPOINTMENT</a></h4>
              <p class="description">if user want to see self-prevention and defence videos</p>
            </div>
          </div>

        </div>

      </div>
<!-- appointment-model-start -->
<!-- The Modal -->
<div class="modal fade" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header text-white" style="background-color:#140D44">
                        <h4 class="modal-title">Appointment</h4>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone NO</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter Phone no">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinc">CNIC</label>
                                        <input type="number" class="form-control" id="cinc" placeholder="Enter CNIC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status of Meeting</label>
                                        <select name="" id="status" class="form-control">
                                            <option value="critical">Critical</option>
                                            <option value="normal">Normal</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Meeting Details</label>
                                        <textarea name="" id="msg" cols="30" rows="5" class="form-control"></textarea>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button"class="btn text-white" style="background-color:#D8050E" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<!-- appointment-model-end -->




    </section><!-- End Services Section -->

  

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>IN CASE OF EMERGENCY CALL, <strong class="onefive">15</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- view FIR table start -->
    <!--table start-->

<!-- section 2 -->
 <section id="fir">
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">FIRST INVESTIGATION REPORT</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example" class="display nowrap" style="width:100%;">
            <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Subject</th>
                <th>Place of Incident</th>
                <th>Meeting Time</th>
                <th>Status</th>

            </tr>
            </thead>
            <tbody>
            <tr class="text-center text-center">

                <td>ALi</td>
                <td>37406 33895115 </td>
                <td>Mobile Snaching </td>
                <td>Gudwal </td>
                <td>12</td>
                <td><button type= "button" style="background-color:#D8050E " class="btn text-white">In Progres</button>
                <button type= "button" style="background-color:#140D44 " class="btn text-white">Completed</button></td>

            </tr>
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- section2 -->
<!--table end-->
    <!-- FIR table end -->




  


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>IGP POLICE COMPLAINT CENTER, <strong class="onefive">8787</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- cyber-crime-table -start -->
      <!--table start-->

<!-- section 2 -->

<section id="cyber">
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">CYBER CRIME REPORT</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example1" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Subject</th>
                <th>Meeting Time</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr class="text-center text-center">

                <td>ALi</td>
                <td>37406 33895115 </td>
                <td>ID HACK </td>
                <td>12</td>
                <td><button type= "button" style="background-color:#D8050E " class="btn text-white">In Progres</button>
                <button type= "button" style="background-color:#140D44 " class="btn text-white">Completed</button></td>

            </tr>
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- section2 -->
<!--table end-->
    <!-- cyber-crime-table-end -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Punjab Police Helpline , <strong class="onefive">8300</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->



    <!-- Anti Bullying table start -->
      <!--table start-->

<!-- section 2 -->
<section id="anti">
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">ANTI BULLYING</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example2" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Status of Incident</th>
                <th>Meeting Time</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr class="text-center text-center">
              <td>Usman</td>
              <td>37406 33895115 </td>
              <td>Critical </td>
              <td>6:00 Pm</td>
              <td><button type= "button" style="background-color:#D8050E " class="btn text-white">In Progres</button>
              <button type= "button" style="background-color:#140D44 " class="btn text-white">Completed</button></td>

</tr>
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- section2 -->
<!--table end-->

    <!-- anti Bullyting table end -->


      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Rescue Services<strong class="onefive">1122</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- Appointment table start -->
<!--table start-->

<!-- section 2 -->
<section id="appointment">
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">APPOINTMENTS</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example3" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Subject of Meeting</th>
                <th>Meeting Time</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center text-center">
              <td>Usman</td>
              <td>37406 33895115 </td>
              <td>House Rent Issues</td>
              <td>6:00 Pm</td>
              <td><button type= "button" style="background-color:#D8050E " class="btn text-white">In Progres</button>
              <button type= "button" style="background-color:#140D44 " class="btn text-white">Completed</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- section2 -->
<!--table end-->
    <!-- Appointment table end -->



<!-- Rescure Service for emergency-->
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Railway Police Helpline<strong class="onefive">1333</strong></h3>


        </div>

      </div>
    </section><!-- End Cta Section -->


<!-- Rescue Service end -->
<!-- Emergency Location Start Table -->

<section id="emergency">
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">Emergency Location</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example4" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Subject</th>
                <th>Area</th>
                <th>Contact No</th>
                <th>Category</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($complaints as $complaint)
            <tr class="text-center text-center">
           
            <td>{{$complaint->subject}}</td>
                <td>{{$complaint->area}} </td>
                <td>{{$complaint->address}} </td>
                <td>{{$complaint->contact}}</td>
              <td>
              @if($complaint->isAcceptLocation == 0)
              <button type= "button" style="background-color:#D8050E " class="btn text-white">In Progres</button>
              @else
              <button type= "button" style="background-color:#140D44 " class="btn text-white">Your Request is Accepted</button>
              @endif  
              </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- Emergency Location End  -->

  
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
<!--script-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>



<!-- location script -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>  

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
   
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<!location end  -->
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>

<script>
    $(document).ready(function() {
        var table = $('#example1').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>


<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>

<script>
    $(document).ready(function() {
        var table = $('#example3').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>


<script>
    $(document).ready(function() {
        var table = $('#example4').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>

<script>
    var x = document.getElementById("demo");
    var lat = null;
    var long= null;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
   lat = position.coords.latitude; 
   long = position.coords.longitude;
   

        var mymap = L.map('mapid').setView([lat, long], 13);
        var marker = L.marker([lat, long]).addTo(mymap);
        var circle = L.circle([lat, long], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(mymap);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: '',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

}
    </script>


</html>