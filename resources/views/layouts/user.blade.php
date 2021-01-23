<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Fort Pro - @yield('title')</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  @yield("css")

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	  <!-- Sidebar - Brand -->
	  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
		<div class="sidebar-brand-icon">
            <i class="fas fa-dollar-sign"></i>
		</div>
		<div class="sidebar-brand-text mx-3 system-title size-x-large">Fort Pro</div>
	  </a>

	  <!-- Divider -->
	  <hr class="sidebar-divider my-0">

	  <!-- Nav Item - Dashboard -->
	  <li class="nav-item  @if (explode(".",Route::getCurrentRoute()->getName())[0] == 'control-panel') active @endif ">
		<a class="nav-link" href="{{ route('control-panel.index') }}">
		  <i class="fas fa-fw fa-tachometer-alt"></i>
		  <span>Control Panel</span></a>
	  </li>

	  <!-- Divider -->
	  <hr class="sidebar-divider  my-0">

	  <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item @if (explode(".",Route::getCurrentRoute()->getName())[0] == 'account') active @endif">
		<a class="nav-link " href="{{ Route('account.index') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-piggy-bank"></i>
		    <span>Accounts</span>
		</a>
	  </li>

	  <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item ">
		<a class="nav-link " href="" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-piggy-bank"></i>
		    <span>Receitas</span>
		</a>
	  </li>

	  <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item ">
		<a class="nav-link " href="" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-piggy-bank"></i>
		    <span>Contas a Pagar</span>
		</a>
      </li>

      	  <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item ">
		<a class="nav-link " href="" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-piggy-bank"></i>
		    <span>Empréstimo</span>
		</a>
      </li>

      	  <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item ">
		<a class="nav-link " href="" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-piggy-bank"></i>
		    <span>Transferência</span>
		</a>
      </li>

      	  <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item ">
		<a class="nav-link " href="" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-piggy-bank"></i>
		    <span>Entrada/Saída Manual</span>
		</a>
      </li>

	  <!-- Divider -->
	  <hr class="sidebar-divider d-none d-md-block">

	  <!-- Sidebar Toggler (Sidebar) -->
	  <div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	  </div>

	</ul>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

	  <!-- Main Content -->
	  <div id="content">

		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

		  <!-- Sidebar Toggle (Topbar) -->
		  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			<i class="fa fa-bars"></i>
		  </button>

          <font class="application-path">@yield('title')</font>

		  <!-- Topbar Navbar -->
		  <ul class="navbar-nav ml-auto">
			<!-- Nav Item - User Information -->
			<li class="nav-item dropdown no-arrow">
			  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->person->name }}</span>
				<img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile_pic_ic5t.svg') }}">
			  </a>
			  <!-- Dropdown - User Information -->
			  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">
				  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
				  Perfil
				</a>
				<a class="dropdown-item" href="#">
				  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
				  Configurações
				</a>
				<div class="dropdown-divider"></div>
                <a  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
			  </div>
			</li>

		  </ul>

		</nav>
		<!-- End of Topbar -->

		<!-- Begin Page Content -->
		<div class="container-fluid">

			@yield('content')

		</div>
		<!-- /.container-fluid -->

	  </div>
	  <!-- End of Main Content -->

	  <!-- Footer -->
	  <footer class="sticky-footer bg-white">
		<div class="container my-auto">
		  <div class="copyright text-center my-auto">
          <span>Copyright &copy; Fort Pro <?php echo date("Y"); ?></span>
		  </div>
		</div>
	  </footer>
	  <!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
		  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
		<div class="modal-footer">
		  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
		  <a class="btn btn-primary" href="login.html">Logout</a>
		</div>
	  </div>
	</div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    <!-- Importing SweetAlert2 CDN!-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Adding mask to the fields!-->
    <script src="{{ asset('js/jquery.mask.js') }}"></script>



        @yield('javascript')

</body>

</html>
