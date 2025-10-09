<!-- Sección EP-->
    <section class="c-ep">
        <div class="c-ep__wrapper">
            
            <!-- Col-Texto -->
            <div class="c-ep__col-text">
                <div class="c-ep__content-text">
                    <h3 class="c-ep__tittle"><?php the_field('title_ep'); ?></h3>
                    <div class="c-ep__content-descript">
                        <p><?php the_field('descript_ep'); ?></p>
                    </div>

                    <?php if( have_rows('btn_ep') ): ?>
                    <?php while( have_rows('btn_ep') ): the_row();
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');
                    ?>
                      <a href="<?php echo $link;?>" class="o-link o-link--primary"><?php echo $text;?><i class="o-link__icon fa-solid fa-arrow-right-long"></i></a>
                    <?php endwhile; else: ?>  
                    <?php endif; ?>
                
                </div>
            </div>

            <!-- Col-Descript -->
            <div class="c-ep__col-img">
                <img class="c-ep__img" src="<?php the_field('img_ep'); ?>" alt="">
            </div>

        </div>
    </section>
<!-- Sección EP ends -->
