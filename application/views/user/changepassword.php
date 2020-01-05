
        <!-- Begin Page Content -->
        <div class="container-fluid overflow-auto">

          <?= $this->session->flashdata('message'); ?>

          <div class="row">
            <div class="col-lg-6">
              <form action="<?= base_url('user/changepassword'); ?>" method="post">
                <div class="form-group">
                  <label for="current_password">Current Password</label>
                  <input type="password" class="form-control" id="current_password" name="current_password">
                  <?= form_error('current_password', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="new_password1">New Password</label>
                  <input type="password" class="form-control" id="new_password1" name="new_password1">
                  <?= form_error('new_password1', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="new_password2">Repeat Password</label>
                  <input type="password" class="form-control" id="new_password2" name="new_password2">
                  <?= form_error('new_password2', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-gropup">
                  <button type="submit" class="badge-pill badge-primary btn-link px-2 float-md-right">Change Password</button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!-- end page content -->


