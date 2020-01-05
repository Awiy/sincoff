
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

    <!-- Topbar -->
    <nav class="navbar topbar navbar-expand bg-gradient-primary static-top shadow">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Home'); ?>">
		<div class="sidebar-brand-text mx-3 text-gray-200">SINTEN<br>COFFEE</div>
	</a>

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3"> 
      <a href="<?= base_url('home/wellcome'); ?>">
        <div class="sidebar-brand-icon rotate-15">
		<i class="fas fa-fw fa-coffee"></i>
		</div>
      </a>
	  </button>
      
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
		<div class="input-group">
			<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-circle btn-dark" type="button" >
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
      </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<li class="nav-item dropdown no-arrow d-sm-none">
			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-search fa-fw"></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-dark btn-circle" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>
		
		<!-- Nav Public Item -->
          <div class="btn-group my-auto">
            <button class="badge badge-pill bg-theme rounded mx-2"> 
                <a class="text-gray-200" href="<?= base_url('auth') ?>">Log in
                <i class="mx-1 fas fa-sign-in-alt"></i>
                </a>
            </button>
            <button class="badge badge-info bg-gradient-light btn-link m-auto" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-list-alt"></i>
            </button>
            <div class="dropdown-menu bg-gradient-primary dropdown-menu-right">
          
                <a class="nav-link dropdown-item small" href="<?= base_url('auth') ?>">
                <i class="fas fa-fw fa-sign-in-alt"></i>
                Sign in</a>

                <a class="nav-link dropdown-item small" href="<?= base_url('auth/register') ?>">
                <i class="fas fa-fw fa-user-edit"></i>
                Register</a>
                
              <a class="nav-link dropdown-item small" href="<?= base_url('auth/forgotpassword') ?>">
                <i class="fas fa-fw fa-unlock-alt"></i>
				forgot password</a>
				
			  <a class="nav-link dropdown-item small" href="<?= base_url('auth/resendverify') ?>">
                <i class="far fa-fw fa-file-code"></i>
                Resend Activated Code</a>
          
            </div>
          </div>
      </ul>
    </nav>
	<!-- End of Topbar -->
	<!-- Begin Page Content -->
	<div class="container-fluid">

	<div class="row">
		<div class="col-lg">