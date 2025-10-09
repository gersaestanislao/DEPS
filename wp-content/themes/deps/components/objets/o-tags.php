<!-- Perfíles -->

<?php
$tags = get_the_tags();
    if ( $tags ): ?>
        
        <?php foreach($tags as $tag) : ?>
 
            <a href="<?php bloginfo(url); echo '/tag/'; ?><?php echo ($tag->slug) . ''; ?>" class="o-tag js-tag--<?php echo ($tag->slug); ?>">
                <span class="o-tag__pin o-tag__pin--<?php echo ($tag->slug); ?>"></span>
            </a>
        
        <?php endforeach; ?>

<?php endif; ?>

