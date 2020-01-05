
<div class="container well col-lg-7">
    <div class="o-hidden border-0 shadow-lg m-auto">
      <div class="card-body">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
              <h1 class="h3 text-gray-900 mb-1">The Coffee Member </h1>
              <?= $this->session->flashdata('message'); ?>
                    <h2 class="h6 text-capitalize mb-4 text-info">Register in here</h2>
              </div>
              <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="User_name" value="<?= set_value('username'); ?>">
                  <?= form_error('username', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <br>
                <button type="submit" class="badge-pill badge-primary btn-link px-2 float-md-right">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-monospace">
                <a class="small" href="<?= base_url('auth/forgotpassword') ?>">Forgot Password?</a>
              </div>
              <div class="text-monospace">
                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



  

