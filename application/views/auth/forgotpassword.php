<div class="well">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <!-- <div class="col-xl-10 col-lg-12 col-md-9"> asalnya ini -->
        <div class="o-hidden border-0 shadow-lg my-5">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- Hapus bagian ini 'ini image di login' <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg"> <!-- ada angka enam, u/ mencapai 12 pada col-lg-12 parentnya -->
                <div class="p-5">
                  <div class="text-center">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="h3 text-gray-900 mb-1">Forgot Password</h1>
                    <h2 class="h6 text-capitalize mb-4 text-info">some code send to your mail for reset your password</h2>
                  </div>
                  <form class="user" method="post" action="<?= base_url('auth/forgotpassword') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    
                    <button type="submit" class="badge-pill badge-primary btn-link px-2 float-none">
                      Send Resetcode
                    </button>
                  </form>
                  <hr>
                  <div class="text-monospace text-lg-center">
                    <a class="small" href="<?= base_url('auth'); ?>">Back to login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

</div>







