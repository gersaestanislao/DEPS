
<!-- dates -->
<?php include('functions/f-dates.php'); ?>
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
  <!-- Card -->
  <?php  if ($end == '?id=app'): ?> 
    <div onClick="location.href='<?php the_permalink(); ?>?id=app'" class="mix <?php the_field('tema'); ?>">
 
    <?php else: ?>

        <div onClick="location.href='<?php the_permalink(); ?>'" class="mix <?php the_field('tema'); ?>">
 
    <?php endif; ?>
                 
    <!-- Ficha de curso -->
    <div class="c-card js-card" id="-<?php the_id(); ?>">

        <!-- Curso -->
        <div class="c-card__wrapper ">

            <div class="c-card__col-1">

              <div class="c-card__content-date--wrapper c-card__wrapper-date--<?php echo $active;?>">
                    
                    <!--Fechas de inscripciónes-->
                    <?php if ($primera_vigente): ?>
                    <div class="c-card__content-date">
                        <small class="c-card__date-descript o-text--xsmall">Inicio de <br>Inscripción</small>
                        <span class="c-card__date-day"><?php echo esc_html( format_fecha_dmY($primera_vigente['start']) ); ?></span>
                    </div>
                    <?php if (!empty($primera_vigente['startc']) && !empty($primera_vigente['closec'])): ?>
                    <?php endif; ?>
                    <?php endif; ?>

                        
                </div>     
                
                <div class="c-card__content-date  c-card__content-date--<?php echo $active; ?> u-color--primary">
                    <small class="c-card__date-descript o-text--xsmall">Ve próximas</small> <br> 
                    <small class="c-card__date-descript o-text--xsmall">Inscripciones</small>
                </div>

            
                <!-- Imagen -->
                <div class="c-card__content-img"
                style="background-image: url('<?php bloginfo(url); echo '/wp-content/uploads/'; ?>/2022/09/<?php the_field('imagen'); ?>');
                    ">
                    <div class="c-card__shadow"></div>

                    <!-- Imagen Objeto  -->
                    <img src="<?php the_field('imageobjet'); ?>" alt="" class="c-card__img">

                </div>
            </div>

            <div class="c-card__col-2">

            
                <!-- Título del curso  -->
                <div class="c-card__content-text">
                    
                    <h2 class="c-card__tittle-curso">
                        <?php the_title(); ?>
                    </h2>
                        
                    <div class="c-card__extract-curso">
                        <small class="c-card__tittle-tags o-text--small-bold">OBJETIVO</small>
                        <p><?php $objExtract = get_field('objetivo');
                        echo substr($objExtract, 0,80); ?>...</p>
                    </div>
                    
                </div>
                

                <!-- Perfiles -->

                <div class="c-card__content-tags-perfiles">

                    <div class="c-card__tittle-tags">
                        <small class="c-card__tittle-tags o-text--small-bold u-none@xs-only">TEMÁTICA:</small>
                    </div>

                    <!-- Tags -->
                    <?php include('objets/o-tema.php'); ?>

                </div>
            </div>

        </div>  

       <!-- Tooltip-->
       <?php include('c-tooltip--microv2.php'); ?>

    </div>
    
</div><!-- Ficha de curso-->