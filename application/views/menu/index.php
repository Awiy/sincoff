        <!-- Begin Page Content -->
        <div class="container-fluid overflow-auto">

          
            <div class="col-lg-6">
              <?= form_error('menu', '<div class="alert alert-danger" role="alert" >','</div>'); ?>
              <a href="" class="badge badge-primary mb-2 mt-3 ml-2" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m): ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $m ['menu']; ?></td>
                  <td><?php if ($m ['is_active']== 1 ) {
                    echo 'active';
                  } else {
                    echo 'unactive';
                  }
                  ?></td>
                  <td>
                    <a href="<?= base_url('menu/editmenu/') . $m ['id']; ?>" class="badge badge-pill badge-success">edit</a>
                    <a href="<?= base_url('menu/deletemenu/') . $m ['id']; ?>" class="badge badge-pill badge-danger" data-toggle="modal" data-target="#newDeleteModal">delete</a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>
            </div>
        

        

        </div>
        <!-- end page content -->



<!-- Add Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="<?= base_url('menu'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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

<!--Delete Modal -->
<div class="modal fade" id="newDeleteModal" tabindex="-1" role="dialog" aria-labelledby="newDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newDeleteModalLabel">Delete Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="<?= base_url('menu/deletemenu/') . $m['id']; ?>" method="post">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
      </form>

    </div>
  </div>
</div>
