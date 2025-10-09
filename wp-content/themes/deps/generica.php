<?php  
    /*
    Template Name: Genérica
    */
?>

<!--/*Cabecera-->
<?php include('header.php'); ?>

   <!--/*Menú-->
   <?php include('components/c-menu.php'); ?>

    <!-- Gestión del conocimiento--> 
    <section class="c-generica">
        <div class="c-generica__wrapper" >
            <div class="c-generica__content-text">
               
                <!-- Título  -->
                <h3 class="c-generica__tittle"><?php the_title() ?></h3>
               
                <!-- Descriptivo  -->
                <div class="c-descript-curso">
                    <?php the_content() ?>
                </div>

            </div>
                         
        </div>
      
    </section>


<!--/*Pié-->
<?php include('footer.php'); ?> 