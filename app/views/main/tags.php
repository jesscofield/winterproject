<main class="page">
    <section class="tags-wrapper">
        <?php foreach ($tags as $tag): ?>
        <!-- single tag -->
        <a href="/main/tag?id=<?php echo $tag['id']; ?>" class="tag">
            <h5><?php echo $tag['name']; ?></h5>
            <p>1 recipe</p>
        </a>
        <!-- end of single tag -->
        <?php endforeach; ?>
    </section>
</main>
