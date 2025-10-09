<!-- Eyecatcher  -->

<?php        
    // var global 
    $postName = get_post_type();
 ?>
<div class="c-eyecatcher-curso c-post--<?php echo $postName; ?>" 

     style="background-image: url('<?php bloginfo(url); echo '/wp-content/uploads/'; ?>/2022/09/<?php the_field('image'); ?> ');
        ">

    <div class="c-eyecatcher-curso__wrapper">

        <!-- Título-->
        <div class="c-eyecatcher-curso__content-text">

                  <!-- Imagen objeto  -->
                 <div class="c-eyecatcher-curso__content-img">
                     <img class="c-eyecatcher-curso__img" src="<?php the_field('imageobjet'); ?>">
                </div>

                <div class="c-eyecatcher-curso__content-tittle">

                    <!-- Breadcrumb  -->
                     <?php include('c-bread.php'); ?> 

                    
                    <!-- Título del curso  -->
                    <h2 class="c-eyecatcher-curso__title"> 
                        <?php the_title(); ?>
                    </h2>
                    
                    <!-- Perfíles -->
                    <div class="c-eyecatcher-curso__tags">

                         <?php 
                        if ( $postName == 'microaprendizaje'): ?>

                            <?php include('objets/o-tema.php'); ?>

                        <?php elseif ( $postName == 'post'): ?>

                            <?php include('objets/o-tags.php'); ?>

                         <?php else: ?>
                         <?php endif; ?> 
                    </div>
                    
                </div>
                
            
        </div><!-- Título -->

        <!-- Fechas inicio-->
        <?php include('c-date-eyecatcher.php'); ?>

    </div>
</div><!-- Eyecatcher-->
