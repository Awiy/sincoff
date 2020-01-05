<!--Edit Modal -->
<div class="col-lg-6 m-auto">
<div class="card m-auto">
  <div class="card-header">
    Rename Role
  </div>
  <div class="card-body">
    <form class="form" action="" method="post">
      <div class="form-group">
        <label for="id">Role number, can't be change</label>
        <input type="text" readonly class="form-control" id="id" name="id" value="<?= $role ['id'] ?>">
      </div>
      <div class="form-group">
          <label for="roleedit">Change role name</label>
        <input type="text" class="form-control" id="roleedit" name="roleedit" value="<?= $role ['role'] ?>">
        <?= form_error('roleedit', '<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="confirmcechk" name="confirmcechk">
        <label class="form-check-label" for="confirmcechk">Confirm</label>
        <?= form_error('confirmcechk', '<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <div class="modal-footer card-group">
        <a href="<?= base_url('admin/role') ?>">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button></a>
        <button type="submit" class="btn btn-primary">Rename</button>
      </div>
    </form>
  </div>
</div>
</div>
