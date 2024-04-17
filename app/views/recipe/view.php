<div class="container mt-3">
    <h1 class="text-center"><?php echo $recipe['name']; ?></h1>

    <!-- nav -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#info">Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tags">Tags</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tools">Tools</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ingredients">Ingredients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#instructions">Instructions</a>
        </li>
    </ul>
    
    <!-- content -->
    <div class="tab-content mt-3">
        <!-- info -->
        <div class="tab-pane fade show active" id="info">
	    <h2 class="text-center">Info</h2>
        <a href="#" class="btn btn-primary mb-3" role="button">Edit recipe</a>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Name</th>
                    <td><?php echo $recipe['name']; ?></td>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Description</th>
                    <td><?php echo $recipe['description']; ?></td>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Image</th>
                    <td>
                        <img src="/assets/img/recipes/<?php echo $recipe['img']; ?>" height="100px">
                    </td>
                </tr>
                <tr>
                    <th>4</th>
                    <th>Prep time</th>
                    <td><?php echo $recipe['prep_time']; ?> min</td>
                </tr>
                <tr>
                    <th>5</th>
                    <th>Cook time</th>
                    <td><?php echo $recipe['cook_time']; ?> min</td>
                </tr>
                <tr>
                    <th>6</th>
                    <th>Serving</th>
                    <td><?php echo $recipe['serving']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

        <!-- tags -->
        <div class="tab-pane fade" id="tags">
            <h2 class="text-center">Recipe tags</h2>
            <a href="/recipe/add_tag?id=<?php echo $recipe['id']; ?>" class="btn btn-primary mb-3" role="button">Add Tag</a>

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <?php $num = 1; ?>
                    <?php foreach($tags as $tag): ?>
                        <tr>
                            <th scope="row"><?php echo $num++; ?></th>
                            <td><?php echo $tag['name']; ?></td>
                            <td>
                                <a href="#" class="btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- tools -->
        <div class="tab-pane fade" id="tools">
            <h2 class="text-center">Recipe tools</h2>
            <a href="#" class="btn btn-primary mb-3" role="button">Add Tool</a>
            <?php $num = 1; ?>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($tools as $tool): ?>
                        <tr>
                            <th scope="row"><?php echo $num++; ?></th>
                            <td><?php echo $tool['name']; ?></td>
                            <td>
                                <a href="#" class="btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- ingredients -->
         <div class="tab-pane fade" id="ingredients">
            <h2 class="text-center">Recipe ingredients</h2>
            <a href="#" class="btn btn-primary mb-3" role="button">Add ingredient</a>

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1 1/2 cups dry pancake mix</td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>1/2 cup flax seed meal</td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>1 cup skim milk</td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- instructions -->
        <div class="tab-pane fade" id="instructions">
            <h2 class="text-center">Recipe instructions</h2>
            <a href="#" class="btn btn-primary mb-3" role="button">Add instruction</a>

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Step</th>
                    <th scope="col">Text</th>
                    <th scope="col" width="200px">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>I'm baby mustache man braid fingerstache small batch venmo succulents shoreditch.</td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Pabst pitchfork you probably haven't heard of them, asymmetrical seitan tousled succulents wolf banh mi man bun bespoke selfies freegan ethical hexagon.</td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Polaroid iPhone bitters chambray. Cornhole swag kombucha live-edge.</td>
                    <td>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>