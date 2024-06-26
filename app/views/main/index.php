<!-- main -->
<main class="page">
    <!-- header -->
    <header class="hero">
    <div class="hero-container">
        <div class="hero-text">
        <h1>flavorfusion</h1>
        <h4>where every bite tells a story</h4>
        </div>
    </div>
    </header>
    <!-- end of header -->
    <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
            <h4>recipes</h4>
            <div class="tags-list">
            <?php foreach ($tags as $tag): ?>
                <a href="/main/tag?id=<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?> (1)</a>
            <?php endforeach; ?>
            </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
            <?php foreach ($recipes as $recipe): ?>
                <!-- single recipe -->
                <a href="/main/recipe?id=<?php echo $recipe['id']; ?>" class="recipe">
                <img
                    src="/assets/img/recipes/<?php echo $recipe['img']; ?>"
                    class="img recipe-img"
                    alt="<?php echo $recipe['name']; ?>"
                />
                <h5><?php echo $recipe['name']; ?></h5>
                <p>Prep : <?php echo $recipe['prep_time']; ?>min | Cook : <?php echo $recipe['cook_time']; ?>min</p>
                </a>
                <!-- end of single recipe -->
            <?php endforeach; ?>

        </div>
        <!-- end of recipes list -->
    </section>
</main>
<!-- end of main -->