<?php $num = 1; ?>

<div class="container">
	<h1 class="text-center">Tools</h1>
	
	<a href="/tools/add" class="btn btn-primary mb-3" role="button">Add tool</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
            <th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
            <?php foreach ($tools as $tool): ?>
                <tr>
                    <th scope="row"><?php echo $num++; ?></th>
                    <td>
                        <?php echo $tool['name']; ?>
                    </td>
                    <td>
                        <a href="/tools/delete?id=<?php echo $tool['id']; ?>" class="btn-sm btn-danger">Delete</a>
                        <a href="/tools/edit?id=<?php echo $tool['id']; ?>" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
		</tbody>
	</table>
</div>