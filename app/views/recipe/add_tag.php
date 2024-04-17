<div class="container">
	<h1 class="text-center">Add tag form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/recipe/add_tag" method="post">
				<div class="form-group">
					<label for="name">Name</label>
                    <select name="tag_id">
                        <option value="">Not selected</option>
                        <?php foreach($tags as $tag): ?>
                            <option value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
				</div>
                <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
</div>