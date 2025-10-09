<!--/*Cabecera-->
<?php include('header.php'); ?>
   <!-- Eyecatcher -->

    <!--/*Menú-->
    <?php include('components/c-menu.php'); ?>

      <!--/*Eyecatcher blog -->
      <?php include('components/c-eyecatcher-in.php'); ?>

      <!-- Cátalogo-->
      <div class="c-catalogo">
            <!-- Filtros  -->
            <?php include('components/c-filter--microaprendizaje.php'); ?>

            <!-- Fichas  -->
            <div class="container--mircroaprendizaje c-catalogo__container">

                <!-- Botónes de filtros -->       

                <!-- Inicia Loop de post-->
                <?php  while (have_posts()) : the_post(); ?>
                    <!-- Card-->
                    <?php include('components/c-card--microaprendizaje.php'); ?>

                <?php endwhile; ?>
                <!-- Termina Loop de post-->

                <!-- reset global post variable. After this point, we are back to the Main Query object -->
                <?php wp_reset_postdata(); ?>

                <div class="c-catalogo__page-lits mixitup-page-list"></div>
            </div><!-- Fichas  -->


        </div><!-- Cátalogo- -->


<!--/*Pié-->
<?php include('footer.php'); ?> 

<!-- Filtros -->
<script>    
    var containerEl = document.querySelector('.container--mircroaprendizaje');
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
    //     callbacks: {
    //     onMixStart: function(state, futureState) {
    //         console.log(futureState.activeFilter.selector);
    //         // alert(futureState.activeFilter.selector);
    //     }
    // }
    });
</script>

