<!-- Carrusel  -->
<section class="c-carousel">
    <div class="c-carousel__wrapper">
        <div class="owl-carousel c-carousel__owl js-owl-carousel owl-theme">
           
            <!--/*Slide-->
            <?php if( have_rows('slide') ): ?>
            <?php while( have_rows('slide') ): the_row();
                $tittle = get_sub_field('tittle');
                $paragraph = get_sub_field('paragraph');
                $bg = get_sub_field('bg');
            ?> 

            <div class="c-carousel__item item" style="background-image: url('<?php echo $bg;?>');">

                <div class="c-carousel__content-text js-animate-text animation-slide-in-up">
                    <h1 class="c-carousel__tittle"><?php echo $tittle;?></h1>
                    <p class="c-carousel__paragraph"><?php echo $paragraph;?></p>
                
           
                    <!--/*BTN-->
                     <?php if( have_rows('btn-slide') ): ?>
                        <?php while( have_rows('btn-slide') ): the_row();
                            $text = get_sub_field('text');
                            $link = get_sub_field('link');
                            $jsModal = get_sub_field('jsModal');
                            $idModal = get_sub_field('idModal');
                        ?>
                        <a  class="o-btn o-btn--primary o-btn--md js-modal-toggle <?php echo $jsModal;?>" href="<?php echo $link;?>" data-id="<?php echo $idModal;?>"><?php echo $text;?></a >

                <?php endwhile; else: ?>  
                <?php endif; ?>

                </div>
            </div>

            <?php endwhile; else: ?>  
            <?php endif; ?>

      </div>
    </div>
</section><!-- Carrusel End-->

<!-- Modal -->
    <?php if( have_rows('slide') ): ?>
    <?php while( have_rows('slide') ): the_row();
        $video = get_sub_field('video');
    ?> 
    <div class="c-modal js-c-modal" data-id="modal001">
        <div class="c-modal__content  c-modal__content--lg js-c-modal__content" data-id="modal001">
            <div class="c-modal__wrapper">
                <div class="c-modal__header">
                    <h3 class="c-modal__tittle">Mejoramos para ti</h3>
                    <button class="c-modal__btn-close o-btn--close js-bt-modal js-bt-modal--video">
                        <i class="o-btn--icon fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="c-modal__body">
                    <!-- video -->
                     <video id="videoModal" class="c-modal__video u-auto u-dblock" controls>
                        <source src="<?php echo $video;?>" type="video/mp4">
                    </video>
                    <!-- video -->
                </div>
                <div class="c-modal__footer u-text-center">
                     <button class="o-btn o-btn--secondary o-btn--md js-bt-modal js-bt-modal--video">CERRAR</button>
                </div>

            </div>
        </div>
    </div>
<?php endwhile; else: ?>  
<?php endif; ?>
<!-- Modal -->