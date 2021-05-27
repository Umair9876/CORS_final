<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CORS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- datatable --}}
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"> -->


    <!-- google font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <!-- google font style end -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">

<!-- table start  -->

<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

<!-- table end -->


    <!-- style font-->
<style>


#fontnew {
    font-family: 'Nosifer', cursive;
    color: #D8050E;
}

.my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}
#foot {
    background-color: #140D44;
    padding: 3px;
}

.font-heading {
    font-family: 'Staatliches';
    font-weight: bold;
/* font-family: 'Lobster', cursive; */
}
</style>


    <!-- style font end -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light text-white" style="background-color:#140D44;">
            <!-- Left navbar links -->
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block ">
                    <a href="{{route('main')}}" class="nav-link text-white">Home</a>
                </li>
                
            </ul>

            
            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('dashboard')}}" class="brand-link">
                <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light" id="fontnew">CORS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="{{route('dashboard1')}}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>


                        </li>
                        <!-- <li class="nav-item has-treeview ">
                            <a href="{{url('/view/complaint')}}" class="nav-link ">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>
                                    Register Complaint
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item has-treeview "><a href="{{route('feedback')}}" class="nav-link ">
                                <i class="nav-icon fas fa-compass"></i>
                                <p>
                                    Feedback
                                </p>
                            </a></li>
                        <li class="nav-item has-treeview "><a href="{{route('emergencyLocations')}}" class="nav-link ">
                                <i class="nav-icon fas fa-compass"></i>
                                <p>
                                    Emergency Locations
                                </p>
                            </a></li>
                        <li class="nav-item has-treeview ">
                            <a href="{{route('appointments')}}" class="nav-link ">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Appointment
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a href="{{route('registerpolice')}}" class="nav-link ">
                                <i class="nav-icon fas fa-registered"></i>
                                <p>
                                    Register Police
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation + Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boxed</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Collapsed Sidebar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ChartJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/UI/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/icons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Icons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/modals.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Modals & Alerts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/navbar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Navbar & Tabs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/timeline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Timeline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/ribbons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ribbons</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Advanced Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Editors</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Validation</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-header">FIR</li>
                        <li class="nav-item">
                            <a href="{{route('firs')}}" class="nav-link">
                                <i class="nav-icon fa fa-files-o"></i>
                                <p>
                                    VIEW FIRS
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <!-- {{-- <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/e-commerce.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>E-commerce</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/projects.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-add.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-edit.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-detail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Detail</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/contacts.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Extras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/lockscreen.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lockscreen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Legacy User Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/language-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Language Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/404.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/500.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/pace.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pace</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/blank.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blank Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="starter.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Starter Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}} -->
                        <li class="nav-header">CYBER CRIME</li>
                        <li class="nav-item">
                            <a href="{{route('cyberCrime')}}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>cyberCrime</p>
                                <span class="badge badge-info right">2</span>
                            </a>
                        </li>
                        <li class="nav-header">ANTI-BULLYING</li>
                        <li class="nav-item">
                            <a href="{{route('antibullying')}}" class="nav-link">
                                <i class="fa fa-file-text nav-icon"></i>
                                <p>Anti Bullying</p>
                                <span class="badge badge-info right">2</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li> --}}
                       
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        </li>

        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <main class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        {{-- @yield('content-header') --}}
        <!-- /.content-header -->
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </main>
    <!-- /.content-wrapper -->
    <!-- fotter -->
    <section id="foot">
      <div class="container-fluid">
        <div class="container">
          <p class="text-center text-white mt-2">Crime Reporting Portal &#169; powered by: ZUR Software Production</p>
        </div>
      </div>
    </section>
    <!-- footer end -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <!-- pie chart script -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- pie chart end -->

    <!-- table script start -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!-- table script end -->
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



<!-- admin emergency sciptt startt -->
<script>
    $(document).ready(function() {
        var table = $('#adminemergency').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 

<!-- admin script end -->


<!-- police appointment sciptt startt -->
<script>
    $(document).ready(function() {
        var table = $('#policeappointment').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 

<!-- police appointment end -->


<!-- Admin appointment sciptt startt -->
<script>
    $(document).ready(function() {
        var table = $('#adminappointment').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 

<!-- admin appointment end -->



<!-- Police Fir Table start  -->
<script>
    $(document).ready(function() {
        var table = $('#policefir').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 


<!-- Police FIR table End -->



<!-- Admin FIR table Start -->
<script>
    $(document).ready(function() {
        var table = $('#adminfir').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 


<!-- Admin FIR table End -->



<!--  Police Cyber Crime Table Script Start  -->
<script>
    $(document).ready(function() {
        var table = $('#policecybercrime').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 

<!-- Police CYber Crime Table Scritp end  -->



<!--  Admin Cyber Crime Table Script Start  -->
<script>
    $(document).ready(function() {
        var table = $('#admincybercrime').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 

<!-- Admin  CYber Crime Table Scritp end  -->
<!--  Police Anti Bullying Table Script Start  -->
<script>
    $(document).ready(function() {
        var table = $('#policeantibullying').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> 



<!-- Police Anti Bullying Table Script end  -->
<!--  Admin Anti Bullying Table Script Start  -->
<script>
    $(document).ready(function() {
        var table = $('#adminantibullying').DataTable( {
            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );
</script> 
<!-- Admin Anti Bullying Table Script end  -->

<!-- Line Script Chart -->

<script>
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Crime Online Reporting System",
                data: [30, 15, 62, 65, 61, 65, 40],
                backgroundColor: 'rgba(66, 133, 244, 0.0)',
                borderColor: '#4285F4',
                borderWidth: 2,
                pointBorderColor: '#4285F4',
                pointBackgroundColor: '#4285F4',
                lineTension: 0.00,
            }
        ]
    },
    options: {
        responsive: true,
        legend: {
            display: true,
        },
        tooltips: {
            intersect: false,
            mode: 'index'
        },
        scales: {
            xAxes: [{
                stacked: true,
                gridLines: {
                    display: false,
                },

                ticks: {
                    fontColor: 'rgba(0,0,0, 0.5)',
                }
            }],
            yAxes: [{
                stacked: true,
                gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    zeroLineColor: "rgba(0,0,0,0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                },
                ticks: {
                    fontColor: 'rgba(0,0,0, 0.5)'
                }
            }]
        }
    }
});
</script>

<!-- Line Script End -->


<!-- pie chart start -->
<script>
$(document).ready(function(){

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['Total Complaint', 20],
['Redressed', 5],
['In Progress', 8],
['Disposed', 10],
['Emergency', 12]
]);

var options = {
title: 'Crime Online Reporting System',
pieHole: 0.4,
};

var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
chart.draw(data, options);
}

});
</script>
<!-- pie chart end -->

</body>

</html>