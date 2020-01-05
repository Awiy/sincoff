        <!-- Begin Page Content -->
        <div class="container-fluid overflow-auto">

          
            <div class="col-lg">
              <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert" >
                  <?= validation_errors(); ?>
                </div>
              <?php endif; ?>

              <a href="" class="badge badge-primary mb-2 mt-3 ml-2" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Sub Menu</th>
                  <th scope="col">Accsesser</th>
                  <th scope="col">Url</th>
                  <th scope="col">Icon</th>
                  <th scope="col">Active</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($subMenu as $sm): ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $sm ['title']; ?></td>
                  <td><?= $sm ['menu']; ?></td>
                  <td><?= $sm ['url']; ?></td>
                  <td><?= $sm ['icon']; ?></td>
                  <td><?php if ($sm ['is_active']== 1 ) {
                    echo 'active';
                  } else {
                    echo 'unactive';
                  }
                  ?></td>
                  <td>
                    <a href="<?= base_url('menu/subedit/') . $sm ['id']; ?>" class="badge badge-pill badge-success">edit</a>
                    <a href="<?= base_url('menu/subdelete/') . $sm ['id']; ?>" class="badge badge-pill badge-danger">delete</a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>
            </div>
        

        

        </div>
        <!-- end page content -->



<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="<?= base_url('menu/submenu'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
        </div>
        <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach ($menu as $m): ?>
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                <label class="form-check-label" for="is_active">
                    Active..?
                </label>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>

    </div>
  </div>
</div>

