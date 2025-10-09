
<!-- Eyecatcher -->
<div class="c-eyecatcher-in  c-eyecatcher-in--search">
    <div class="c-eyecatcher-in__wrapper  c-eyecatcher-in__wrapper--search">


        <div class="c-eyecatcher-in__content-text c-eyecatcher-in__content-text--search">
     
            <?php
                $s=get_search_query();
                $args = array(
                                's' =>$s
                            );
                    // The Query
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                        _e("<h2 class='c-eyecatcher-in__title--search'>Resultados: ".get_query_var('s')."</h2>");
                        
                    }else{
                ?>
                        <h2 class="search__title">No se encontraron coincidencia</h2>
                        <div>
                        <p class="search__descript">Intenta la busqueda con otras palabras.</p>
                        </div>
                <?php } ?>
                
                <a href="#" onclick="history.back();" class="c-tool-tip__btn o-btn o-btn--small o-btn--secondary__outline">
                    <i class="fa-solid fa-arrow-left"></i>
                    Regresa al catálogo
                </a>
        </div>


    </div>
</div><!-- Eyecatcher 6$E%&OtOsXf=XTmb-->