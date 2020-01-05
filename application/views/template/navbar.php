	<?php 
	
	if ($this->session->userdata('email') ) {
		$this->load->view('template/user_item_nav');
	} else {
		$this->load->view('template/public_item_nav');
	}


