<!--/*Cabecera-->
<?php include('header.php'); ?>
<?php  
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
             $url = "https://";   
        else  
             $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];   
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];    
        $urlend = $url;
        $end = end((explode('/', $urlend)));
      ?>   
   <!-- Eyecatcher -->

    <!--/*Menú-->
    <?php include('components/c-menu.php'); ?>
    <p id="sep"></p>

      <!--/*Eyecatcher blog -->
      <?php include('components/c-eyecatcher-in.php'); ?>

      <!-- Cátalogo-->
      <div class="c-catalogo">


            <!-- Cat Gestión directiva-->
            <?php if ( $postName == 'gestiondirectiva'): ?> 
                
                <!-- Filtros  -->
                <?php include('components/c-filter--gestionDirectiva.php'); ?>
            
                <div class="container--gestionDirectiva c-catalogo__container">
                    
                  <!-- Inicia Loop de post-->
                    <?php query_posts(array(
                        'post_type' => 'gestiondirectiva',
                        'order' => 'ASC',));
                        if (have_posts()) :
                        while (have_posts()) : the_post();
                        ?>
                            <?php include('components/c-card--gestionDirectiva.php'); ?>
                     
                        <?php endwhile; ?>
                        <?php else : ?>
                    <?php endif; ?> 
                    <!-- Termina Loop de post-->

                     <div class="c-catalogo__page-lits mixitup-page-list"></div>
                </div><!-- Fichas  -->

            <?php elseif ( $postName == 'catmaestro'): ?> 

                <!-- Filtros  -->
                <?php include('components/c-filter--catMaestro.php'); ?>

                <!-- Cat Maestro-->
                <div class="container--catMaestro c-catalogo__container">

                    <!-- Botónes de filtros -->       

                    <!-- Inicia Loop de post-->
                    <?php  while (have_posts()) : the_post(); ?>
                        <!-- Card-->
                        <?php include('components/c-card--catMaestro.php'); ?>

                    <?php endwhile; ?>
                    <!-- Termina Loop de post-->

                    <div class="c-catalogo__page-lits mixitup-page-list"></div>
                </div> <!-- Cat Maestro-->
      
                <?php else: ?>

                <!-- Filtros  -->
                <?php include('components/c-filter.php'); ?>

                <!-- Cat Maestro-->
                <div class="container c-catalogo__container">
                    
                    <?php  if ($end == '?id=actives'): ?> 
                    <h2 style="display: block;
                        display: block;
                        width: 100%;
                        padding: 1.5rem;
                        font-size: 1.5rem;
                        font-family: 'Tittle-bold';
                        color: #1e1e1e;">Inscripciones abiertas</h2> 

                    <?php else: ?>

                    <?php endif; ?>

                    <!-- Inicia Loop de post-->
                    <?php  while (have_posts()) : the_post(); ?>
                        <!-- Card-->
                        <?php include('components/c-card.php'); ?>

                    <?php endwhile; ?>
                    <!-- Termina Loop de post-->

                    <!-- reset global post variable. After this point, we are back to the Main Query object -->
                    <?php wp_reset_postdata(); ?>

                    <div class="c-catalogo__page-lits mixitup-page-list"></div>
                    </div> <!-- Cat Maestro-->


                <?php endif; ?>


        </div><!-- Cátalogo- -->


<!--/*Pié-->
<?php include('footer.php'); ?> 

<!-- Filtros -->
<?php if ( $postName == 'gestiondirectiva'): ?>  
    <script>    
        var containerEl = document.querySelector('.container--gestionDirectiva');
        var mixer = mixitup(containerEl, {

            pagination: {
                limit: 9 // impose a limit of 8 targets per page

            },
            multifilter: {
                enable: true
            },
            animation: {
                effects: 'fade translateZ(-100px)'
            },

        });

    </script>
    <?php elseif ( $postName == 'catmaestro'): ?>  

        <script>    
        var containerEl = document.querySelector('.container--catMaestro');
        var mixer = mixitup(containerEl, {

            pagination: {
                limit: 9 // impose a limit of 8 targets per page

            },
            multifilter: {
                enable: true
            },
            animation: {
                effects: 'fade translateZ(-100px)'
            },

        });

    </script>

<?php else: ?>

    <script>
        const urlSearchParams = new URLSearchParams(window.location.search);
        const idurl = urlSearchParams.get("id"); 

        if(idurl=='actives'){
            var containerEl = document.querySelector('.container');

            var mixer = mixitup(containerEl, {

            pagination: {
                limit: 9 

            },
            multifilter: {
                enable: true
            },
            animation: {
                effects: 'fade translateZ(-100px)'
            },
            load: {
                filter: '.Vigente'
            },

            });
            $('#vigente' ).attr( 'checked', true );

         }else{
            var containerEl = document.querySelector('.container');
            var mixer = mixitup(containerEl, {

            pagination: {
                limit: 9 

            },
            multifilter: {
                enable: true
            },
            animation: {
                effects: 'fade translateZ(-100px)'
            }

            });  
        }


    </script>


<?php endif; ?>

