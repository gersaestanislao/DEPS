 <div class="c-tool-tip__wrapper c-tool-tip__wrapper--accordion js-accordion-content">
            <div class="c-tool-tip__content-text">



                <!-- Autores  -->
                <div class="c-tool-tip__content-descript u-dblock">
                <span class="c-tool-tip__desc-tittle">AUTORES</span>
                <p class="c-tool-tip__date"><?php the_field('author'); ?></p>
                </div>

                <!-- Perfiles -->
                <div class="c-tool-tip__content-descript u-dblock">
                    <span class="c-tool-tip__desc-tittle">PERFILES</span>
                    <p class="c-tool-tip__date">
                        <?php include('objets/o-tags--small.php'); ?>
                    </p>
                </div>

                <!-- Descriptivo -->
                <div class="c-tool-tip__content-descript u-dblock">
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
