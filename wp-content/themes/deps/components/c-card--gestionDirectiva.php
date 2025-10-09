<!-- Ficha de curso -->
<div class="mix <?php the_field('perfil'); ?> <?php the_field('plataforma'); ?> <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->slug . ' '; }}?>">
              
    <div class="c-card c-card--accordion js-card" id="-<?php the_id(); ?>">


        <!-- Curso -->
        <div class="c-card__wrapper js-accordion-trigger">
        <i class="fa-solid fa-angle-down c-accordion__icon-trigger"></i>
            <!-- Imagen -->
            <div class="c-card__col-1">
            
                <div class="c-card__content-img" style="background-image: url('<?php the_field('imagen'); ?>');
                    ">
                  
                    <span class="c-card__kind-platform c-card__kind-platform--<?php the_field('plataforma'); ?> ">
                        <?php the_field('plataforma'); ?>
                    </span>

                    <div class="c-card__shadow"></div>
                    <!-- Imagen Objeto  -->
                    <img src="<?php the_field('imageobjet'); ?>" alt="" class="c-card__img">

                </div>
            </div>
            <!-- Imagen  -->

             <!-- Texto -->
            <div class="c-card__col-2">
         
                <div class="c-card__content-text">

                    <!-- Título del curso  -->
                    <h2 class="c-card__tittle-curso">
                        <?php the_title(); ?>
                    </h2>
                    <!-- Título del curso  -->

                    <!-- Objetivo del curso  -->       
                    <div class="c-card__extract-curso u-dblock">
                        <small class="c-card__tittle-tags o-text--small-bold">OBJETIVO</small>
                        <p><?php $objExtract = get_field('objetivo');
                        echo substr($objExtract, 0,130); ?>...</p>
                    </div>
                    <!-- Objetivo del curso  -->  
                    
                </div>
            </div>
            <!-- Texto -->

        </div>  
        <!-- Curso -->

        <!-- Accordion detail-->
        <?php include('c-accordion--gestionDirectiva.php'); ?>
        <!-- Accordion-->

        <!-- Tooltip detail-->
        <?php include('c-tooltip--gestionDirectiva.php'); ?>
        <!-- Tooltip-->
 


    </div>
</div>
<!-- Ficha de curso-->
