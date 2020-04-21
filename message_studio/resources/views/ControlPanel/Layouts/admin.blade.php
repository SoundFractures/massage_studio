<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pallas | Nadzorna Plošča</title>

  
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/override.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        
        <div class="sidebar-brand-text mx-3">
          <a href="{{url("/")}}">
            PALLAS
          </a>
        </div>
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

      <!-- Nav Item - Blogi -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('blogs') }}">
          <i class="fas fa-fw fa-blog"></i>
          <span>Blogi</span></a>
      </li>
      <!-- Nav Item - Povprasevanja -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('questions') }}">
          <i class="fas fa-fw fa-comment"></i>
          <span>Povpraševanja</span></a>
      </li>
      <!-- Nav Item - Subscription Item -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('subscriptions') }}">
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
        <a class="nav-link" href="{{ url('settings') }}">
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
            @include('ControlPanel.Components.newSubscribers')
            @include('ControlPanel.Components.newQuestions')
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
  
  
  
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>

  <!-- Core plugin JavaScript-->

  <script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
  <!-- Custom scripts for all pages-->
 
  <script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>

  <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}" defer></script>
  <script src="{{ asset('js/datatables-demo.js') }}" defer></script>
  <script>
    $('#deleteModal').on('shown.bs.modal', function () {
  $('#deleteModal').trigger('focus')
})
</script>

</body>

</html>
