<!-- Tool tip -->
<div class="c-tool-tip js-tooltip-<?php the_id(); ?>">
    <div class="c-tool-tip__wrapper">
        <div class="c-tool-tip__content-text">

            <!-- Título  -->
            <h3 class="c-tool-tip__tittle"> <?php the_title(); ?></h3>

            <!-- Perfíles
            <div class="c-tool-tip__content-tags-perfiles"></div>-->

            <!-- Descriptivo  -->
            <div class="c-tool-tip__content-descript">
                <?php $descriptExtract = get_field('descriptCourse');
                echo substr($descriptExtract, 0, 300); ?>...
            </div>


            <!-- Dates  -->

            <?php if ($primera_vigente): ?>
            <div class="c-tool-tip__content-dates c-tool-tip__content-dates--<?php echo $active; ?>">

                <?php if( have_rows('inscriptions') ): ?>
                <?php while( have_rows('inscriptions') ): the_row();
                        
                        // Inicio de incripciones 
                        $start = get_sub_field('start');

                        // Cierre de inscripciones 
                        $close = get_sub_field('close');

                    ?>

                    <!-- Date -->
                    <div class="c-tool-tip__content-date">
                        <span class="c-tool-tip__desc-tittle">Inscripciones
                            
                        </span>
                        <p class="c-tool-tip__date u-text-lowercase">
                        <?php include('functions/f-inscriptions--multiple.php'); ?>
                        </p>
                    </div>
                    
        
                <?php endwhile; else: ?>
                <?php endif; ?> 
                    
            </div>

            <?php if (!empty($primera_vigente['startc']) && !empty($primera_vigente['closec'])): ?>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Dates  -->
            <div class="c-tool-tip__content-dates">

                <div class="c-tool-tip__content-date-cols ">
                    <!-- Date -->
                    <div class="c-tool-tip__content-date c-tool-tip__content-date--col">
                        <span class="c-tool-tip__desc-tittle">Horas</span>
                        <p class="c-tool-tip__date"><?php the_field('teachingHours'); ?></p>
                    </div>

                    <!-- Date -->
                    <div class="c-tool-tip__content-date c-tool-tip__content-date--col">
                    <span class="c-tool-tip__desc-tittle">Cupo</span>
                        <p class="c-tool-tip__date"><?php the_field('cupo'); ?></p>
                    </div>
                </div>

            </div>

            <?php  if ($end == '?id=app'): ?> 
                <div class="c-tool-tip__content-btns">
                    <a href="http://innovaedu.imss.gob.mx/sied/app/preRegistro/" class="c-tool-tip__btn o-btn o-btn--small o-btn--primary <?php echo $active ?>" >Inscribirme</a>
                    <a href="<?php the_permalink(); ?>?id=app"class="c-tool-tip__btn o-btn o-btn--small o-btn--primary__outline">Más detalles</a>
                </div>
            <?php else: ?>
                <div class="c-tool-tip__content-btns">
                    <a href="http://innovaedu.imss.gob.mx/sied/app/preRegistro/" class="c-tool-tip__btn o-btn o-btn--small o-btn--primary <?php echo $active ?>" >Inscribirme</a>
                    <a href="<?php the_permalink(); ?>"class="c-tool-tip__btn o-btn o-btn--small o-btn--primary__outline">Más detalles</a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>