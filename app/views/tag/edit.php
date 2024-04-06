<div class="container">
	<h1 class="text-center">Edit tag form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/tag/edit" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $tag['name']; ?>">
				</div>
                <input type="hidden" name="id" value="<?php echo $tag['id']; ?>">
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
	</div>
</div>