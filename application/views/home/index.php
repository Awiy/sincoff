			
					<div class="row col-lg">
					<?php if ($this->session->userdata('email')) {
						$this->load->view('home/update');
						$this->load->view('home/read');
					} else {
						$this->load->view('home/read');
					};
					?>
					

