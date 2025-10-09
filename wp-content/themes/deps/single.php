<!--/*Cabecera-->
<?php include('header.php'); ?>



   <!--url -->
   <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
       
  ?>   


    <!--Menú-->
    <?php include('components/c-menu.php'); ?>

    <!--+ Inicia Loop de post +-->
    <?php  while (have_posts()) : the_post(); ?>

   
        <!-- Eyecatcher -->

        <?php include('components/c-eyecatcher-course.php'); ?>
    
        <!-- Detalle  de curso  -->
        <div class="c-curso">
            <div class="c-curso__wrapper"> 

                <!-- Descriptivo -->
                <?php echo $fecha_actual  ?>
                <?php include('components/c-decript-curso.php'); ?>

            
                <!-- Detalles de curso -->
                  <?php if ( $postName == 'post'): ?>

                        <?php include('components/c-details-curso.php'); ?> 

                        <?php elseif ( $postName == 'microaprendizaje'): ?>

                            <?php include('components/c-details-curso--microaprendizaje.php'); ?>

                                <?php elseif ( $postName == 'gestiondirectiva'): ?>

                                    <?php elseif ( $postName == 'colaboradores'): ?>
                                       
                                        <?php include('components/c-gafete.php'); ?>

                        <?php else: ?>
                    <?php endif; ?>
 

            </div>
        </div><!-- Detalle  de curso  -->

    <?php endwhile; ?>
    <!--+ Termina Loop de post+-->

    <!-- Videos de como inscribirme-->
    <?php include('components/statics/s-video.php'); ?> 
 
<!--/*Pié-->
<?php include('footer.php'); ?> 
