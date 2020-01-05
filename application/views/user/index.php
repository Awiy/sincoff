        <div class="col-lg-6 container">
        <!-- Begin Page Content -->
          <div class="card" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4 card-body">
                <img src="<?= base_url('assets/img/profile/'). $user['image'] ?>" class="card-img ml-2" alt="<?= $user['image']?>">
                
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $user ['name'] ?> </h5>
                  <p class="card-text"><?= $user ['email'] ?> </p>
                  <p class="card-text"><?= $user ['phonenumber'] ?> </p>
                  
                </div>
              </div>
              <div class="col-sm card-footer">
              <p class="card-text float-right"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?> </small></p>
              <p class="card-text float-left">
                <?php if ($user ['gender'] == 'Female'):?>
                <i class="fas fa-venus badge-danger text-info rounded p-1 ml-2"></i>
                <?php elseif ($user ['gender'] == 'Male'): ?>
                <i class="fas fa-mars badge-danger text-info rounded p-1 ml-2"></i>
                <?php else: ?>
                <i class="fas fa-transgender-alt badge-danger text-info rounded p-1 ml-2"></i>
                <?php endif; ?>
                </p>
              </div>
              
            </div>
          </div>
          <div class="well">
                  <p class="card-text">About me: <br><?= $user ['bio'] ?> </p>
              </div>
        </div>
        <!-- end Page content -->

