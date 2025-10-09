<!-- Sección EAD-->
    <section class="c-ead">
        <div class="c-ead__wrapper">
            
            <!-- Col-Texto -->
            <div class="c-ead__col-text">
                <div class="c-ead__content-text">
                    <h3 class="c-ead__tittle"><?php the_field('title_ead'); ?></h3>
                    <div class="c-ead__content-descript">
                        <p><?php the_field('descript_ead'); ?></p>
                    </div>
                    
                    <?php if( have_rows('btn_ead') ): ?>
                    <?php while( have_rows('btn_ead') ): the_row();
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');
                    ?>
                      <a href="<?php echo $link;?>" class="o-link o-link--primary"><?php echo $text;?><i class="o-link__icon fa-solid fa-arrow-right-long"></i></a>
                    <?php endwhile; else: ?>  
                    <?php endif; ?>
               
                    </div>
            </div>

            <!-- Col-Descript -->
            <div class="c-ead__col-img">
                <img class="c-ead__img" src="<?php the_field('img_ead'); ?>">
            </div>

        </div>
    </section>
<!-- Sección EAD ends -->
