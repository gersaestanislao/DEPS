<!-- Ficha de curso -->
<div class="mix <?php the_field('tema'); ?> <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->slug . ' '; }}?>">
              
    <div class="c-card c-card--sm c-card--accordion js-card" id="-<?php the_id(); ?>">


        <!-- Curso -->
        <div class="c-card__wrapper js-accordion-trigger">
        <i class="fa-solid fa-angle-down c-accordion__icon-trigger"></i>
            <!-- Imagen -->
            <div class="c-card__col-1">
            
                <div class="c-card__content-img" style="background-image: url('<?php the_field('imagen'); ?>');
                    ">
                    <div class="c-card__shadow"></div>
                    <!-- Imagen Objeto  -->
                    <img src="<?php the_field('imageobjet'); ?>" alt="" class="c-card__img c-card__img--left">

                </div>
            </div>
            <!-- Imagen  -->

             <!-- Texto -->
            <div class="c-card__col-2">
         
                <!-- Título del curso  -->
                <div class="c-card__content-text">
                    <h2 class="c-card__tittle-curso">
                        <?php the_title(); ?>
                    </h2>            
                </div>

            </div>
            <!-- Texto -->

        </div>  
        <!-- Curso -->

        <!-- Accordion detail-->
        <?php include('c-accordion--catMaestro.php'); ?>
        <!-- Accordion-->

        <!-- Tooltip detail-->
        <?php include('c-tooltip--catMaestro.php'); ?>
        <!-- Tooltip-->
 


    </div>
</div>
<!-- Ficha de curso-->
