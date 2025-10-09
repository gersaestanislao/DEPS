<!-- Perfíles -->
<?php
$tags = get_the_tags();
    if ( $tags ): ?>
        <?php foreach($tags as $tag) : ?>
            <span class="o-tag__pin--generic"> <?php echo ($tag->name); ?>,&nbsp; </span>
        <?php endforeach; ?>

<?php endif; ?>
