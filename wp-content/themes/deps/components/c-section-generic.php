<section class="c-videoc">
    
    <div class="c-videoc__content-title">
        <h3 class="col-3__item--content-title" ><?php the_field('title_videos'); ?></h3>
    </div>

    <div class="c-videoc__content">
    
       <?php if( have_rows('itemvideo') ): ?>
        <?php while( have_rows('itemvideo') ): the_row();
            $titulo_del_video = get_sub_field('titulo_del_video');
            $video = get_sub_field('video');
        ?>

            <div class="c-videoc__item">
                <div class="c-videoc__video">
                    <video controls src="<?php echo  $video;?>"></video>
                </div>
                <div class="c-videoc__text">
                    <p><?php echo  $titulo_del_video;?></p>
                </div>
            </div>

        <?php endwhile; else: ?>  
        <?php endif; ?>


    </div>

</section>




<section class="col-3">

        <div class="col-3__item--content-title">
            <h3 class="col-3__item--content-title" ><?php the_field('title_pin'); ?></h3>
        </div>

        
        
        <?php if( have_rows('pin') ): ?>
        <?php while( have_rows('pin') ): the_row();
            $text = get_sub_field('text');
            $descript = get_sub_field('descript');
        ?>
        <div class="col-3__item">

            <div class="col-3__wraper"> 

                <i class="col-3__icon fa-solid fa-location-dot"></i>
                <h4 class="col-3__title">
                    <?php echo  $text;?>
                </h4>
                <p class="col-3__text"><?php echo  $descript;?></p>

            </div>
        </div>

        <?php endwhile; else: ?>  
        <?php endif; ?>


        <div class="col-3__item--content-title">
            <a class="o-btn o-btn--small o-btn--secondary__outline" href="<?php the_field('link_pin'); ?>"><?php the_field('link-text_pin'); ?></a>
        </div>


</section>