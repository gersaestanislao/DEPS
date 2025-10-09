<!-- Tool tip -->
<div class="c-tool-tip c-tool-tip--xl js-tooltip-<?php the_id(); ?> ">
    <div class="c-tool-tip__wrapper"> 
        <div class="c-tool-tip__content-text">

            <!-- Título  -->
            <h3 class="c-tool-tip__tittle"> <?php the_title(); ?></h3>


            <!-- Dirigido a  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">AUTORES</span>
                <p class="c-tool-tip__date"><?php the_field('author'); ?></p>
            </div>

            <!-- Perfiles  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">PERFILES</span>
                <p class="c-tool-tip__date">
                    <?php include('objets/o-tags--small.php'); ?>
                </p>
            </div>


            <!-- Descriptivo  -->
            <div class="c-tool-tip__content-descript">
                <span class="c-tool-tip__desc-tittle">DESCRIPTIVO</span>
                <p class="c-tool-tip__date">
                    <?php the_field('descript'); ?>
                </p>
            </div>


            <div class="c-tool-tip__content-btns c-tool-tip__content-btns--xl">
                <a class="o-link  o-link--secondary" target="_blank" href="<?php the_field('documento'); ?>">DESCARGA DE ARCHIVO PDF
                    <i class="fa-solid fa-download"></i>    
              </a>
            </div>

        </div>
    </div>
</div>