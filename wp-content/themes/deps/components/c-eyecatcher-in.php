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
<div class="c-eyecatcher-in">
    <div class="c-eyecatcher-in__wrapper">
   
   <!-- var   -->
   <?php 
         $postName = get_post_type();
    ?>

    <?php ;
     if( $postName == 'microaprendizaje')
        {
        $tittle = ('Catálogo de cursos de Microaprendizaje');

            } else if( $postName == 'gestiondirectiva')
                    {
                    $tittle = ('Catálogo de cursos en gestión directiva');

                } else if( $postName == 'catmaestro')
                    {
                    $tittle = ('Catálogo maestro de documentos en salud');

                    }else {
                            $tittle = ('Catálogo de cursos de EDIMSS');
                        }

               
        ?>
 
 

        <div class="c-eyecatcher-in__content-text">
            <h2 class="c-eyecatcher-in__title o-text--tittle-medium-bold">
                <?php echo $tittle; ?>
                <?php the_archive_description( '' ); ?>
            </h2>
        </div>


        <!-- Título-->

        <!-- Buscador-->

        <?php  if ($end == '?id=app'): ?> 
            
        <?php else: ?>
            <?php include('c-search.php'); ?>
        <?php endif; ?>
    
        


    </div>
</div><!-- Eyecatcher  -->