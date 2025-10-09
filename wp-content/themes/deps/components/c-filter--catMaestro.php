<!-- Filtros -->


<form class="controls c-catalogo__control c-catalogo__control--lg">


    <!-- filtros -->
    <div class="c-accordion__head c-catalogo__control-head js-accordion-trigger u-none@md" id="js-head-accordion-filter" >
        <div class="c-accordion__content-btn">
            <button class="c-accordion__btn-trigger">Mostrar Filtros</button> 
            <i class="fa-solid fa-angle-down c-accordion__icon-trigger c-accordion__icon-trigger--open js-accordion-icon"></i>
        </div>
    </div>
    
    <div class="c-accordion__content c-catalogo__control-content js-accordion-content u-dblock@md" id="js-content-accordion-filter">
            
            <!-- Filtros-->
            <fieldset class="c-catalogo__content-filter" data-filter-group class="checkbox-group">
                <label class="checkbox-group-label c-catalogo__title-filter o-text--paragraph-bold" >Perfiles</label>
                    <?php

                    // var global 
                    $postName = get_post_type();

                    query_posts(array( 'post_type'=>  $postName ));

                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    
                    $custom_post_tags = get_the_tags();

                    if ( $custom_post_tags ) {
                        foreach( $custom_post_tags as $tage ) {
                            $tags_arr[] = $tage -> name ;
                        }
                    }
                    endwhile; endif;
                    if( $tags_arr ) {
                        
                        $uniq_tags_arr = array_unique( $tags_arr);

                        foreach( $uniq_tags_arr as $tag ) {
                            // LIST ALL THE TAGS FOR DESIRED POST Tsanitize_titleYPE
                            $sanitizeTag =  sanitize_title($tag);

                            echo '
                            
                            <div class="checkbox c-catalogo__input-group">
                                <i class="c-catalogo__square fa-regular fa-square"></i>
                                <input class="c-catalogo__checkbox c-catalogo__checkbox--generic"  type="checkbox" value=".' .$sanitizeTag. '" id="js-check"/>
                                <label class="checkbox-label c-catalogo__label o-text--paragraph">' .$tag. '</label>
                            </div>';
                            }
                        }
                    ?>

            
            </fieldset>


            
            <!-- Filtros -->
            <fieldset class="c-catalogo__content-filter" data-filter-group class="checkbox-group">
                <label class="checkbox-group-label c-catalogo__title-filter o-text--paragraph-bold" >Temas</label>
               
                <?php
            
                    $fieldplatform = get_field_object('field_647814297e173');
                    if( $fieldplatform['choices'] ): ?>
                      
                            <?php foreach( $fieldplatform['choices'] as $value => $label ): ?>
                                <div class="c-catalogo__squarecheckbox c-catalogo__input-group">
                                <i class=" c-catalogo__square fa-regular fa-square"></i>
                                    <input class="c-catalogo__checkbox c-catalogo__checkbox--generic"  type="checkbox" value=".<?php echo $value; ?>" id="js-check--<?php echo $value; ?>"/>
                                    <label class="checkbox-label c-catalogo__label o-text--paragraph"><?php echo $label; ?></label>
                                </div>
                            <?php endforeach; ?>

                        
                <?php endif; ?>
  
            </fieldset>
           
            <button type="reset" class="c-catalogo__btn-reset o-btn o-btn--small o-btn--secondary o-btn--extend" id="js-check-btn">Limpiar Filtros</button>
        
        </div>


</form>
