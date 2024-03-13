<?php $num = 1; ?>

<div class="container">
	<h1 class="text-center">Recipes</h1>
	
	<a href="form.html" class="btn btn-primary mb-3" role="button">Add recipe</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Image</th>
			<th scope="col">Prep time</th>
			<th scope="col">Cook time</th>
			<th scope="col">Serving</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
            <?php foreach ($recipes as $recipe): ?>
                <tr>
                    <th scope="row"><?php echo $num++; ?></th>
                    <td>
                        <a href="single_recipe.html"><?php echo $recipe['name']; ?></a>	
                    </td>
                    <td><img src="/assets/img/recipes/<?php echo $recipe['img']; ?>" height="100px"></td>
                    <td><?php echo $recipe['prep_time']; ?> min</td>
                    <td><?php echo $recipe['cook_time']; ?> min</td>
                    <td><?php echo $recipe['serving']; ?></td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
		</tbody>
	</table>
</div>