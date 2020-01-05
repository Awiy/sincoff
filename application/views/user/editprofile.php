
        <!-- Begin Page Content -->
        <div class="container-fluid overflow-auto">
          
          <div class="row">
          <div class="col-lg-8">
          
          <?= form_open_multipart('user/editprofile'); ?>
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Email can not change.</small>
            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" aria-describedby="emailHelp" readonly>
          </div>

          <div class="form-group">
          <small id="usernameHelp" class="form-text text-muted">User_name cant rename.</small>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" disabled aria-describedby="usernameHelp">
          </div>

          <div class="form-group">
            <small id="nameHelp" class="form-text text-muted">Insert your full name.</small>
              <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" aria-describedby="nameHelp">
              <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
          </div>

          <div class="form-group row">
          <div class="col-sm">
            <small id="birthdayHelp" class="form-text text-muted">Insert your birthday.</small>
            <input type="date" class="form-control form-control-user" id="birthday" name="birthday" value="<?= set_value('birthday'); ?>" aria-describedby="birthdayHelp">
            <?= form_error('birthday', '<small class="text-danger pl-3">','</small>'); ?>
          </div>

          
          <div class="col-sm">
            <small id="genderHelp" class="form-text text-muted">Choise your gender.</small>
              <select class="form-control" id="gender" name="gender" aria-describedby="genderHelp">
              <option><?= $user['gender']; ?></option>
              <?php if($user['gender'] === 'Female' ): ?>
              <option>Male</option>
              <?php elseif($user['gender'] === 'Male' ): ?>
              <option>Female</option>
              <?php else: ?>
              <option>Male</option>
              <option>Female</option>
              <?php endif; ?>
              </select>
              <?= form_error('gender', '<small class="text-danger pl-3">','</small>'); ?>
          </div>
          </div>

          <div class="form-group">
            <small id="phonenumberHelp" class="form-text text-muted">Insert your phone number.</small>
              <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?= $user['phonenumber']; ?>" aria-describedby="phonenumberHelp">
              <?= form_error('phonenumber', '<small class="text-danger pl-3">','</small>'); ?>
          </div>
          
          <div class="form-group">
            <small id="bioHelp" class="form-text text-muted">Insert something about you, max 1200 chart.</small>
              <textarea rows="3" class="form-control" id="bio" name="bio" placeholder="<?= $user['bio']; ?>" aria-describedby="bioHelp"></textarea>
              <?= form_error('bio', '<small class="text-danger pl-3">','</small>'); ?>
          </div>

          <div class="form-group row">
            <div class="col sm-10">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?= base_url('assets/img/profile/'). $user['image']; ?>" class="img-thumbnail rounded-left">
                </div>
                <div class="col-sm-9">
                <small id="imageHelp" class="form-text text-muted">Choose file under 1000kb, gif,jpg,png file.</small>
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="imageHelp">
                  <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row justify-content-end">
              <button type="submit" class="btn btn-primary">Save edit</button>
          </div>

          </form>
          </div>
          </div>

        </div>
        <!-- end page content -->




