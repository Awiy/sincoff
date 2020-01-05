 <!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Home'); ?>">
		<div class="sidebar-brand-icon rotate-15">
		<i class="fas fa-fw fa-coffee"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SINTEN<br>COFFEE</div>
	</a>

    <!-- Divider untuk garis-->
    <div class="text-info">
	<hr class="sidebar-divider mb-0">
    <i class="<?= $icon['icon']; ?> float-right bg-gradient-light rounded-left"></i>
    </div>

	<!-- Query menu -->

	<?php 
		$role_id = $this->session->userdata('role_id'); 
	
		$queryMenu = "SELECT `user_menu`. `id`, `menu`
						FROM `user_menu` JOIN `user_access_menu` 
						ON `user_menu`. `id` = `user_access_menu`. `menu_id`
					WHERE `user_access_menu`. `role_id` = $role_id
					AND `user_menu`.`is_active` = 1
					";
		$menu = $this->db->query($queryMenu)->result_array();
		// var_dump($menu); die;
	?>


	<!--Looping Menu Heading -->
	<?php foreach ($menu as $m ):?>
	
	

	<!-- Sub Menu, sesuai menu -->
	<?php 
		$menuId = $m['id'];
		$querySubMenu= "SELECT * 
						FROM `user_sub_menu` JOIN `user_menu`
							ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
						WHERE `user_sub_menu`.`menu_id` = $menuId
						AND `user_sub_menu`.`is_active` = 1
					";
	$subMenu = $this->db->query($querySubMenu)->result_array();
	// var_dump($subMenu); die;
	?>



	<?php foreach ($subMenu  as $sm): ?>
		
			<?php if($title == $sm['title']): ?>
			<li class="nav-item small active bg-info">
				<?php else: ?>
				<li class="nav-item small">
			<?php endif; ?>
			<a class="nav-link p-2" href="<?= base_url($sm['url']); ?>">
			<i class="<?= $sm['icon']; ?>"></i>
			<span><?= $sm['title']; ?></span></a>
			</li>
			</li>
		

	<?php endforeach; ?>

	<?php endforeach; ?>


	
	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline m-2">
		<button class="btn btn-link rounded-circle btn-sm badge-info mt-2" id="sidebarToggleTop"><i class="fas fa-exchange-alt"></i></button>
	</div>


	</ul>
	<!-- End of Sidebar -->
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

    <!-- Topbar -->
    <nav class="navbar topbar navbar-expand bg-gradient-primary static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
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
		

			<!-- Nav Item -For User -->
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<button class="badge badge-info btn-link"><i class="fas fa-fw fa-bell"></i></button>
					<!-- Counter - Alerts -->
					<span class="badge badge-danger badge-counter">3+</span>
				</a>
				<!-- Dropdown - Alerts -->
				<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
					<h6 class="dropdown-header">Alerts Center</h6>
					<a class="dropdown-item d-flex align-items-center" href="#">
						<div class="mr-3">
							<div class="icon-circle bg-primary">
								<i class="fas fa-file-alt text-white"></i>
							</div>
						</div>
						<div>
							<div class="small text-gray-700">December 12, 2019</div>
							<span class="font-weight-bold">A new monthly report is ready to download!</span>
						</div>
						<a class="dropdown-item text-center small text-gray-700" href="#">Show more notive</a>
					</a>
				</div>
			</li>

			<!-- Nav Item - Messages -->
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<button class="badge badge-info btn-link"><i class="fas fa-fw fa-envelope"></i></button>
					<!-- Counter - Messages -->
					<span class="badge badge-danger badge-counter">7</span>
				</a>
				<!-- Dropdown - Messages -->
				<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
					<h6 class="dropdown-header">Message Center</h6>
					<a class="dropdown-item d-flex align-items-center" href="#">
						<div class="dropdown-list-image mr-3">
							<img class="rounded-circle" src="<?= base_url('assets/img/profile/'). $user['image'] ?>" alt="">
							<div class="status-indicator bg-success"></div>
						</div>
						<div class="font-weight-bold">
							<div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
							<div class="small text-gray-500">Emily Fowler · 58m</div>
						</div>
					</a>
					<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
				</div>
			</li>
			
			<div class="topbar-divider d-none d-sm-block"></div>

			<!-- Nav User Item -->
			<li class="nav-item navbar-expand-sm">
				<div class="btn-group my-auto nav-link">
					<div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	
					<span class="mr-2 d-none d-lg-inline text-gray-200 small"> <?= $user['name']; ?> </span>
					<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/'). $user['image'] ?>">
					<button class="badge badge-info bg-gradient-light btn-link" type="button">
                      <i class="fas fa-list-alt"></i>
                    </button>
					</div>
					
					<div class="dropdown-menu bg-gradient-primary dropdown-menu-right">
						<a class="dropdown-item small p-1 m-1" href="<?= base_url('user') ?>"><i class="fas fa-fw fa-user"></i>My Profile</a>

						<a class="dropdown-item small p-1 m-1" href="<?= base_url('user/editprofile') ?>"><i class="fas fa-fw fa-user-edit"></i>Edit Profile</a>

						<a class="dropdown-item small p-1 m-1" href="<?= base_url('user/changepassword') ?>"><i class="fas fa-fw fa-key"></i>Change_Password</a>
						
						<a class="dropdown-item small p-1 m-1" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i>Sign_out</a>
					</div>
				</div>
			</li>
      </ul>
    </nav>
	<!-- End of Topbar -->
	<!-- Begin Page Content -->
	<div class="container-fluid">
	<!-- Page Heading -->

	<div class="row">
		<div class="col-lg">
        <?= $this->session->flashdata('message');?>