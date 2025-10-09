<!--/*Cabecera-->
<?php include('header.php'); ?>

    <!--/*Menú-->
    <?php include('components/c-menu.php'); ?>

    <!--/*Eyecatcher blog -->
    <?php include('components/c-eyecatcher-search.php'); ?>
    

      <!-- Cátalogo-->
      <div class="c-catalogo">

           

            <!-- Fichas  -->
            <div class="container c-catalogo__container c-catalogo__container--search">


                <!-- Inicia Loop de post-->
                <?php
                
                    $s=get_search_query();
                    $postName=get_post_type();
                    

                    $args = array(
                                    's' =>$s,
                                    'post_type' => $postName,
                                );
                        // The Query
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                
                                    while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                            ?>
                                                
                                                <?php if( $postName=="post"):?>
                                                    <?php include('components/c-card.php'); ?>

                                                    <?php elseif( $postName=="microaprendizaje"):?>
                                                        <?php include('components/c-card--microaprendizaje.php'); ?>

                                                        <?php elseif( $postName=="gestiondirectiva"):?>
                                                            <?php include('components/c-card--gestionDirectiva.php'); ?>

                                                            <?php elseif( $postName=="catmaestro"):?>
                                                                 <?php include('components/c-card--catMaestro.php'); ?>
                                                        
                                                    
                                                    <?php else: ?>
                                                        <h2 class="search__title">No se encontraron coincidencia</h2>
                                                        <?php wp_reset_postdata(); ?>
                                                    <?php endif; ?>

                                                        
                                            <?php
                                    }
                                }else{
                            ?>

                            <div>
                                <h2 class="search__title">No se encontraron coincidencia</h2>
                                <p class="search__descript">Intenta la busqueda con otras palabras.</p>
                            </div>
                    <?php } ?>
                <!-- Termina Loop de post-->

                <div class="c-catalogo__page-lits mixitup-page-list"></div>

            </div><!-- Fichas  -->


        </div><!-- Cátalogo- -->


<!--/*Pié-->
<?php include('footer.php'); ?> 

<!-- Filtros -->
<script>    
    var containerEl = document.querySelector('.container');
    var mixer = mixitup(containerEl, {

    pagination: {
        limit: 9 // impose a limit of 8 targets per page

    },
    multifilter: {
        enable: true
    },
    animation: {
        effects: 'fade translateZ(-100px)'
    }
    });
</script>
