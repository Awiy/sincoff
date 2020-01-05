        <!-- Begin Page Content -->
        <div class="container-fluid overflow-auto">

            <div class="col-lg-6">

              <p class="text-gray-400"> <span class="bg-gradient-info p-1"><?= $role['role'] ?> Controler</span></p>
              
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Access</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m): ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $m ['menu']; ?></td>
                  <td>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?=$m ['id'];  ?>">
                    </div>
                  </td>
                </tr>
                <?php $i++; ?>
                
                <?php endforeach; ?>
                
              </tbody>
              <a href="<?= base_url('admin/role')?>">
              <button type="button" class="btn btn-outline-primary btn-small"> <i class="fa fa-fw fa-backward"></i> Back</button>
              </a>
            </table>
            </div>
        

        

        </div>
        <!-- end page content -->



