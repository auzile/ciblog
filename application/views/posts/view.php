<div class="container col-12">
	<h2 class="mt-4"><?php echo $post['title']; ?></h2>
	<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
	<div>
		<?php echo $post['body']; ?>
	</div>

	<hr>

	<?php echo form_open('/posts/delete/'.$post['id']);?>
		<input type="submit" value="delete" class="btn btn-danger">
	</from>
	<a class="btn btn-primary pull-left" href="edit/<?php echo $post['slug'];?>">Edit</a>
</div>