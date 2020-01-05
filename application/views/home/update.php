
			<!--update post -->
			<div class="container m-2">
			<form class="form" action="<?= base_url('user/post') ?>" method="post">
			<div class="card-body border mx-2">
			<div class="form-group">
			<div class="row">
				
				<textarea rows="3" class="form-control" id="posttext" name="posttext"  placeholder="Whats on your mind?"></textarea>
				</div>
				
				<span for="imagepost" class="badge btn-theme mt-0"><i class="fa fa-camera"></i>
				<input type="file" id="imagepost" name="imagepost">
				</span>
				<button type="submit" class="btn btn-sm btn-theme btn-success float-right mt-0">POST</button>
			</div>
			</div>
			</form>
			</div>

			