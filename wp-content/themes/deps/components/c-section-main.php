<!-- Carrusel main -->
<section class="c-carousel-main">
    <div class="c-carousel-main__wrapper">
        <div class="owl-carousel c-carousel-main__owl js-owl-carousel-main owl-theme">
            
            <!--/*Slide-->
            <?php if( have_rows('slideMain') ): ?>
            <?php while( have_rows('slideMain') ): the_row();
                $tittleMain = get_sub_field('tittleMain');
                $linkMain= get_sub_field('linkMain');
                $bgMain = get_sub_field('bgMain');
            ?>

                <div onclick="location.href='<?php echo $linkMain;?>';" class="c-carousel-main__item item"
                    style="background-image: url(<?php echo $bgMain;?>);">
                    <div class="c-carousel-main__layer"></div>
                    <div class="c-carousel-main__content-text">
                        <h2 class="c-carousel-main__tittle"><?php echo $tittleMain;?></h2>
                    </div>
                </div>

            <?php endwhile; else: ?>  
            <?php endif; ?>

         </div>
      </div>
    </div>
</section><!-- Carrusel  main End-->