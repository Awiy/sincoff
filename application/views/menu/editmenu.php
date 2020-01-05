

<!--Edit Modal -->
<div class="col-lg-6 m-auto">
  <div class=" card-header">
    Edit Menu
  </div>
  <div class="col-lg card-body">
    <form class="form" action="" method="post">
      <div class="form-group card-body">
        <label for="id">Menu id, can't be change</label>
        <input type="text" readonly class="form-control" id="id" name="id" value="<?= $menu ['id'] ?>">
      </div>
      <div class="form-group card-body">
        <label for="menuedit">Change menu name</label>
        <input type="text" class="form-control" id="menuedit" name="menuedit" value="<?= $menu ['menu'] ?>">
        <?= form_error('menuedit', '<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <fieldset class="card-body">
        <div class="row form-group">
        <legend class="col-form-label col-sm pt-0">Active Choise</legend>
        <div class="col-sm-10 form-group">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="is_active" id="gridRadios1" value="1" checked>
            <label class="form-check-label" for="gridRadios1">
                Active
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="is_active" id="gridRadios2">
            <label class="form-check-label" for="gridRadios2">
                Unactive
            </label>
            </div>
        </div>
        </div>
        <?= form_error('is_active', '<small class="text-danger pl-3">','</small>'); ?>
     </fieldset>
        <div class="form-group form-check card-body">
            <input type="checkbox" class="form-check-input" id="confirmcechk" name="confirmcechk">
            <label class="form-check-label" for="confirmcechk">Confirm</label>
            <?= form_error('confirmcechk', '<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="card-body modal-footer form-group">
            <a href="<?= base_url('menu/index') ?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button></a>
            <button type="submit" class="btn btn-primary">Rename</button>
        </div>
    </form>
  </div>
</div>

