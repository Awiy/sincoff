


<!--Edit Modal -->
<div class="col-lg-6 m-auto">
  <div class=" card-header">
    Page information up_date
  </div>
  <div class="col-lg card-body">
    <form class="form" action="" method="post">
      <div class="form-group card-body">
        <label for="id">Page id, can't be change</label>
        <input type="text" readonly class="form-control" id="id" name="id" value="<?= $subMenu ['id'] ?>">
      </div>
      <div class="form-group card-body">
        <label for="title">Title page</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']; ?>">
        <?= form_error('title', '<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <div class="form-group card-body">
        <label for="url">Url page</label>
        <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>">
        <?= form_error('url', '<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <div class="form-group card-body">
        <label for="icon">Icon Page</label>
        <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
        <?= form_error('icon', '<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <div class="form-group card-body">
            <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach ($menu as $m): ?>
                
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                
                <?php endforeach; ?>
            </select>
            <?= form_error('menu_id', '<small class="text-danger pl-3">','</small>'); ?>
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
            <a href="<?= base_url('menu/submenu') ?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button></a>
            <button type="submit" class="btn btn-primary">Up date</button>
        </div>
    </form>
  </div>
</div>

