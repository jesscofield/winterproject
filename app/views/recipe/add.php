<div class="container">
	<h1 class="text-center">Add recipe form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/recipe/add" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description" rows="3"></textarea>
				</div>
                <div class="form-group">
					<label for="prep-time">Prep time</label>
					<input type="number" name="prep" class="form-control">
				</div>
                <div class="form-group">
					<label for="cook-time">Cook time</label>
					<input type="number" name="cook" class="form-control">
				</div>
                <div class="form-group">
					<label for="serving">Serving</label>
					<input type="number" name="serving" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" name="img" class="form-control-file" id="image">
				</div>
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
</div>