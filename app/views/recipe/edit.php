<div class="container">
	<h1 class="text-center">Edit recipe form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form method="POST" action="/recipe/edit" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $recipe['name']; ?>">
				</div>
                <div class="form-group">
					<label for="name">Prep</label>
					<input type="text" class="form-control" name="prep" value="<?php echo $recipe['prep_time']; ?>">
				</div>
                <div class="form-group">
					<label for="name">Cook</label>
					<input type="text" class="form-control" name="cook" value="<?php echo $recipe['cook_time']; ?>">
				</div>
                <div class="form-group">
					<label for="name">Servings</label>
					<input type="text" class="form-control" name="serving" value="<?php echo $recipe['serving']; ?>">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" rows="3"><?php echo $recipe['description']; ?></textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" class="form-control-file" name="img">
				</div>
                <input type="hidden" name="id" value="<?php echo $recipe['id']; ?>">
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>