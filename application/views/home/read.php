<!-- read post -->
<?php 
		$queryPost= "SELECT  `user_post`.`id`, `date_post`, `text_post`, `coment_post`, `like_post`, `dislike_post`, `name`, `image`, `username`
					FROM 	`user_post` JOIN `user` 
						ON 	`user`.`id` = `user_post`.`user_id`
					WHERE	`user_post`.`user_id` = `user`.`id`
						
					";
	$userPost = $this->db->query($queryPost)->result_array();
	// var_dump($userPost); die;
?>
<div class="col-lg">
<?php foreach ($userPost as $post): ?>

<div class="card-body shadow row m-2">
	<div class="card-header m-2 ">
		<span><img src="<?= base_url('assets/img/profile/'). $post['image'] ?>" class="img-circle rounded-circle mr-1" height="50" width="50" alt="Avatar"> <?= $post['name']?></span>
		<p class="m-2">Post date :<br> <?= date('d F Y', $post['date_post']); ?></p>
	</div>
	
	<div class="col-sm shadow m-2">
		<p><?= $post['text_post'] ?></p>
	</div>
	
	<div class="container">
	<!-- like button -->
	<a href="<?= base_url('user/like/') . $user ['id']; ?>" class="badge-pill badge-primary rounded m-2 float-right">
		<i class="far fa-thumbs-up"></i>
		<span class="badge badge-info badge-counter"><?= $post['like_post'] ?></span>
	</a>

	<!-- dislike button -->
	<a href="<?= base_url('user/dislike/') . $user ['id']; ?>" class="badge-pill badge-primary rounded m-2 float-right">
		<i class="far fa-thumbs-down"></i>
		<span class="badge badge-info badge-counter"><?= $post['dislike_post'] ?></span>
	</a>
	<!-- View Coment button -->
	<button class="badge-pill rounded float-left" type="button" data-toggle="collapse" data-target="#coment<?=$post['id'];?>Example" aria-expanded="false" aria-controls="coment<?=$post['id'];?>Example">
		View coment
		<span class="badge badge-info badge-pill"><?= $post['coment_post'] ?>+</span>
	</button>
	
	<?php if ($this->session->userdata('email') ): ?>
	<form class="form" action="<?= base_url('user/coment'); ?>" method="post">
	<div class="form-group">
		<button class="badge-pill badge-primary rounded" type="button" data-toggle="collapse" data-target="#collapse<?=$post['id'];?>Example" aria-expanded="false" aria-controls="collapse<?=$post['id'];?>Example">
			Add coment
		</button>
		<div class="collapse" id="collapse<?=$post['id'];?>Example">
			<textarea class="form-control" rows="3"></textarea>
		<button type="submit" class="btn btn-sm btn-theme btn-success float-right my-2">POST</button>
		</div>
	</div>
	</form>
<?php endif; ?>

	
	</div>
	
	
	<!-- coment show -->
	<div class="collapse" id="coment<?=$post['id'];?>Example">

	<?php 
		$postId = $post['id'];

		$queryComent= "SELECT `user_coment`.`coment_post`, `coment_date`, `name`, `image`,`user`.`id`
					FROM 	`user_coment`
					JOIN 	`user_post` ON `user_post`.`id` = `user_coment`.`user_post_id`
					JOIN	`user` ON `user`.`id` = `user_coment`.`user_id`
					WHERE 	`user_coment`.`user_post_id` = $postId

						
					";
	$userComent = $this->db->query($queryComent)->result_array();
	// var_dump($userComent); die;
	?>

	<?php foreach($userComent as $coment): ?>
	
	<div class="card-body m-2">
		<img src="<?= base_url('assets/img/profile/'). $coment['image'] ?>" class="img-circle rounded-circle mr-1" height="30" width="30" alt="Avatar"> <?= $coment['name'] ?> <?= date('d F Y', $coment['coment_date']); ?>
		<div class="ml-sm-5"><?= $coment['coment_post'] ?></div>
	</div>
	
	<?php endforeach; ?>
	</div>
</div>
<?php endforeach; ?>



