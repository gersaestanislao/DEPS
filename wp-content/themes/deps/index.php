<!--/*Cabecera-->
<?php include('header.php'); ?>

   <!--/*Menú-->
    <?php include('components/c-menu.php'); ?>

    <div class="error-404">
        <div class="error-404__container">
            <a class="error-404__link" href="<?php bloginfo(url) ?>">
                <img class="error-404__img" src="<?php bloginfo('template_url') ?>/src/img/404.jpg">
            </a>
        </div>
    </div>

<!--/*Pié-->
<?php include('footer.php'); ?> 
