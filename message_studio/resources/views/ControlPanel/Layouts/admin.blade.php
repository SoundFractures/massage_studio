<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/override.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
 
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        
        <div class="sidebar-brand-text mx-3">PALLAS </div>
    </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nadzorna Plošča</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Akcije
      </div>

      <!-- Nav Item - Blog Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
          <i class="fas fa-fw fa-cog"></i>
          <span>Blog</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="buttons.html"><i class="fas fa-fw fa-plus"></i>
                <span class="right-align">Ustvari</span></a>
            <a class="collapse-item " href="buttons.html"><i class="fas fa-fw fa-list-alt"></i>
                <span class="right-align">Pregled</span></a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Povprasevanja Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePovprasevanja" aria-expanded="true" aria-controls="collapsePovprasevanja">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Povpraševanja</span>
        </a>
        <div id="collapsePovprasevanja" class="collapse" aria-labelledby="headingPovprasevanja" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="buttons.html"><i class="fas fa-fw fa-plus"></i>
                <span class="right-align">Ustvari</span></a>
            <a class="collapse-item " href="buttons.html"><i class="fas fa-fw fa-list-alt"></i>
                <span class="right-align">Pregled</span></a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Subscription Item -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('subscribers') }}">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Naročniki</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Profil
      </div>

      <!-- Nav Item - Settings -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>Nastavitve</span></a>
      </li>

      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
      
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
            
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <span class="text-dark">
                <i class="fa fa-bars"></i>
            </span>
          </button>
          
          <!-- Topbar Search -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h3 class="h5 mb-0 text-light">Nadzorna Plošča</h3>
          </div>
          <ul class="navbar-nav ml-auto">

            
            <!-- Nav Item - Subscriptions -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="subscriptionsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span style="font-size:1.5em" class="text-light">
                    <i class="fas fa-user-friends fa-fw"></i>
                </span>
                <!-- Counter - Subscriptions -->
                <span class="badge badge-danger badge-counter">3</span>
              </a>
              <!-- Dropdown - Subscribers -->
              <div class="dropdown-list  dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="subscriptionsDropdown">
                <h6 class="dropdown-header bg-dark border-dark">
                    Novi Naročniki
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Pregled Naročnikov</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span style="font-size:1.5em" class="text-light">
                    <i class="fas fa-envelope fa-fw"></i>
                </span>
                
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header bg-dark border-dark">
                    Nova Povpraševanja
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them
                      sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so
                      far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Pregled Povpraševanj</a>
              </div>
            </li>

            

            <!-- Nav Item - User Information -->
            

          </ul>

        </nav>
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <div>
            @yield('content')
          </div>
     

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  
  <script src="{{ asset('js/jquery.min.js') }}" defer></script>
  
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>

  <!-- Core plugin JavaScript-->

  <script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
  <!-- Custom scripts for all pages-->

  <script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>

  <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}" defer></script>
  <script src="{{ asset('js/datatables-demo.js') }}" defer></script>

  

</body>

</html>
