<div class="container">
	<h1 class="text-center">Edit tool form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/tools/edit" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $tool['name']; ?>">
				</div>
                <input type="hidden" name="id" value="<?php echo $tool['id']; ?>">
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
	</div>
</div>