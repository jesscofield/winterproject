<main class="page">
    <div class="featured-recipes">
        <h4><?php echo $tag['name']; ?></h4>
            <!-- recipes list -->
        <div class="recipes-list">
            <?php foreach($recipes as $recipe): ?>
            <!-- single recipe -->
            <a href="/main/recipe?id=<?php echo $recipe['id']; ?>" class="recipe">
                <img
                    src="/assets/img/recipes/<?php echo $recipe['img']; ?>"
                    class="img recipe-img"
                    alt=""
                />
                <h5><?php echo $recipe['name']; ?></h5>
                <p>Prep : <?php echo $recipe['prep_time']; ?>min | Cook : <?php echo $recipe['cook_time']; ?>min</p>
            </a>
            <!-- end of single recipe -->
            <?php endforeach; ?>
        </div>
        <!-- end of recipe list -->
    </div>
</main>