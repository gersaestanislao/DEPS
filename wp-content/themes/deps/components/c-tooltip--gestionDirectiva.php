<!-- Tool tip -->
<div class="c-tool-tip c-tool-tip--xl js-tooltip-<?php the_id(); ?> ">
    <div class="c-tool-tip__wrapper"> 
        <div class="c-tool-tip__content-text">

            <!-- Título  -->
            <h3 class="c-tool-tip__tittle"> <?php the_title(); ?></h3>


            <!-- Dirigido a  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">DIRIGIDO A:</span>
                <p class="c-tool-tip__date"><?php the_field('person'); ?></p>
            </div>

            <!-- Descriptivo  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">OBJETIVO</span>
                <p class="c-tool-tip__date">
                    <?php the_field('objetivo'); ?>
                </p>
            </div>

            <!-- Descriptivo  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">INSCRIPCIONES</span>
                <p class="c-tool-tip__date">
                    <?php the_field('inscript'); ?>
                </p>
            </div>



            <!-- Date  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">HORAS</span>
                <p class="c-tool-tip__date">
                    <?php the_field('teachingHours'); ?>
                </p>
            </div>


            <div class="c-tool-tip__content-btns c-tool-tip__content-btns--xl">
              <span class="c-tool-tip__desc-tittle u-text-center  o-btn--<?php the_field('plataforma'); ?>">INSCRÍBETE AL CURSO</span>
              <a href="https://sicaviqa.imss.gob.mx/" target="_blank" class=" o-btn o-btn--exsmall o-btn--extend o-btn--secondary__outline  o-btn--<?php the_field('plataforma'); ?>">
                    Soy nuevo usuario,registrame
                </a>
                <a href="<?php the_field('linkCourse'); ?>" class=" o-btn o-btn--exsmall o-btn--extend o-btn--secondary o-btn--<?php the_field('plataforma'); ?>">
                    Ya tengo usuario, incribirme al curso
                </a>
                <a href="<?php the_field('linkCourse'); ?>" class=" o-btn o-btn--exsmall o-btn--extend o-btn--secondary o-btn--show-<?php the_field('plataforma'); ?>">
                  MÁS DETALLES DEL CURSO
                </a>
                <button class="o-link  o-link--secondary u-text-underline js-modal-toggle  o-btn--<?php the_field('plataforma'); ?>" data-id="122"> Guia de registro</button>
            </div>

        </div>
    </div>
</div>