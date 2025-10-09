<!-- Breadcrumb  -->
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
<div class="c-eyecatcher-curso__content-breadcrumb">
    <ul class="c-breadcrumb">

        <!-- Inicio  -->
        <li class="c-breadcrumb__item">

         <!-- Bread-->
            <?php  if ($end == '?id=app'): ?> 
               
            <?php else: ?>
                <a class="c-breadcrumb__link"href="<?php bloginfo(url); ?>">Inicio</a>
            <?php endif; ?>

        </li>


        <li class="c-breadcrumb__item">

            <?php 

            if ( $postName == 'microaprendizaje'): ?>
            
            <!-- Bread-->
            <?php  if ($end == '?id=app'): ?> 
              
            <?php else: ?>
                <a class="c-breadcrumb__link" href="<?php bloginfo(url); ?>/educacion-a-distancia/">Educación a Distancia</a>  
            <?php endif; ?>

              
            <?php elseif ( $postName == 'post'): ?>
                
                <!-- Bread-->
                    <?php  if ($end == '?id=app'): ?> 
                       
                    <?php else: ?>
                        <a class="c-breadcrumb__link" href="<?php bloginfo(url); ?>/educacion-a-distancia/">Educación a Distancia</a>  
                    <?php endif; ?>

            <?php else: ?>
            <?php endif; ?>

        </li>

        <li class="c-breadcrumb__item">

             <?php 

            if ( $postName == 'microaprendizaje'): ?>
                <!-- Bread-->
                <?php  if ($end == '?id=app'): ?> 
                    <a class="c-breadcrumb__link"href="<?php bloginfo(url); ?>/microaprendizaje/?id=app">< Regresar al catálogo</a>
                 <?php else: ?>
                    <a class="c-breadcrumb__link"href="<?php bloginfo(url); ?>/microaprendizaje">Microaprendizaje</a>
                <?php endif; ?>

            <?php elseif ( $postName == 'post'): ?>
                    <!-- Bread-->
                    <?php  if ($end == '?id=app'): ?> 
                         <a class="c-breadcrumb__link" href="<?php bloginfo(url); ?>/category/curso/?id=app"> < Regresar al catálogo</a>
                    <?php else: ?>
                        <a class="c-breadcrumb__link" href="<?php bloginfo(url); ?>/category/curso/">Catálogo de cursos</a>
                <?php endif; ?>

             <?php else: ?>
             <?php endif; ?>

        </li>


    </ul>
</div><!-- Breadcrumb  -->
