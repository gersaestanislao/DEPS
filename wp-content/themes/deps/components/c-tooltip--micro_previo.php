<!-- Tool tip -->
<div class="c-tool-tip js-tooltip-<?php the_id(); ?>">
    <div class="c-tool-tip__wrapper">
        <div class="c-tool-tip__content-text">

            <!-- Título  -->
            <h3 class="c-tool-tip__tittle"> <?php the_title(); ?></h3>


             <!-- Temática -->
            <div class="c-tool-tip__content-tags-perfiles">
                <?php include('objets/o-tema.php'); ?></p>
            </div>

            <!-- Descriptivo  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">OBJETIVO:</span>
                <p class="c-tool-tip__date">
                    <?php $objExtract = get_field('objetivo');
                    echo substr($objExtract, 0, 200); ?>...
                </p>
            </div>


            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">Diregido a:</span>
                <p class="c-tool-tip__date"><?php the_field('person'); ?></p>
            </div>

            <!-- Dates  -->
            <div class="c-tool-tip__content-dates">

                <div class="c-tool-tip__content-date-cols ">
                    <!-- Date -->
                    <div class="c-tool-tip__content-date c-tool-tip__content-date--col">
                    <span class="c-tool-tip__desc-tittle">Abierto permanente</span>
                    </div>
                    <!-- Date -->
                    <div class="c-tool-tip__content-date c-tool-tip__content-date--col">
                    <span class="c-tool-tip__desc-tittle">Horas lectivas</span>
                        <p class="c-tool-tip__date"><?php the_field('teachingHours'); ?></p>
                    </div>
                </div>

            </div>

            <div class="c-tool-tip__content-btns">
                <a href="<?php the_permalink(); ?>" class="c-tool-tip__btn--micro o-btn o-btn--small o-btn--extend o-btn--primary">Inscribirme</a>
 
            </div>

        </div>
    </div>
</div>