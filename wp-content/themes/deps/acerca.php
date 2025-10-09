<?php  
    /*
    Template Name: Acerca de nosotros
    */
?>

<!--/*Cabecera-->
<?php include('header.php'); ?>

   <!--/*Menú-->
   <?php include('components/c-menu.php'); ?>

   <!-- Acerca de nosotros--> 
   <section class="c-acd">
        <div class="c-acd__wrapper" >
            <div class="c-acd__col-tex">
             
                <h3 class="c-acd__tittle">Acerca de nosotros</h3>
                <p class="c-acd__descript">Somos la División de Educación Permanente en Salud (DEPS) de la Coordinación de Educación en Salud (CES) un equipo multidisciplinario que ofrece diferentes programas educativos y herramientas innovadoras de formación, actualización y capacitación, estamos a la vanguardia de la innovación pedagógica y tecnológica en educación en salud.</p>
            </div>
            
             <div class="c-acd__col-img">
                <div class="c-acd__content-img">
                    <img class="c-acd__img" src="<?php bloginfo('template_url') ?>/src/img/nosotros.jpg" alt="">                    
                </div>
             </div> 
             
        </div>
       <div class="c-acd__content-paragrah"> 
        <p class="c-acd__paragrah">Para lograr nuestra misión y visión, la División de Educación Permanente en Salud se fundamenta en los siguientes valores:</p>
       </div>
        <div class="c-acd__content-list">
            <ul class="c-acd__list">
                <li class="c-acd__item1">Calidad</li>
                <li class="c-acd__item2">Profesionalismo</li>
                <li class="c-acd__item3">Excelencia</li>
                <li class="c-acd__item4">Productividad</li>
            
            </ul>
        </div>
    
    </section>

    <!--Seccion mission -->
    <section class="c-mision">
        <div class="c-mision__wrapper">

            <!-- Col-1 -->
            <div class="c-mision__col-1">
                
                    <div class="c-mision__col-img">
                        <img class="" src="<?php bloginfo('template_url') ?>/src/img/mision.png" alt="">                    
                    </div>
                
            </div>
            <!-- Col-1 -->

            <!-- Col-2 -->
            <div class="c-mision__col-2">
                <div class="c-mision__content-descript">
                    <h4 class="c-mision__tittle">Nuestra misión es diseñar e implementar programas, proyectos, estrategias y acciones de innovación educativa</h4>
                    <p class="c-mision__descript">para la formación, actualización y capacitación del personal de salud mediante el uso de recursos de información, de colaboración y de aprendizaje, la profesionalización docente multimodal, la evaluación y la investigación educativa, a fin de contribuir a mejorar la calidad de la atención de los derechohabientes y sus familias</p>
                    <div class="c-tool-tip__content-btns">
                        <button class="c-tool-tip__btn o-btn o-btn--small o-btn--primary" >Consultar la normatividad</button>
                       
                    </div>
                    
                </div>
            </div>
            <!-- Col-2 -->
        </div>

    </section>
    
    <!-- Carrusel mision -->
    <section class="c-vision">
        <div class="c-vision__wrapper">

            <!-- Col-1 -->
            <div class="c-vision__col-1">
                <div class="c-vision__content-descript">
                    <h4 class="c-vision__tittle">Nuestra  visión, es desarrollar estrategias innovadoras y creativas en apoyo al proceso de educación en salud acorde al modelo educativo institucional</h4>
                    <p class="c-vision__descript">posicionando al IMSS como líder nacional en la formación, actualización y capacitación del personal de salud a través del uso de recursos educativos apoyados en tecnologías de información y comunicación.</p>
                </div>
                   
                
            </div>
            <!-- Col-1 -->

            <!-- Col-2 -->
            <div class="c-vision__col-2">
                <div class="c-vision__col-img">
                    <img class="" src="<?php bloginfo('template_url') ?>/src/img/vision.jpg" alt="">                    
                </div>
            </div>
            <!-- Col-2 -->
        </div>

    </section>
    

<!--/*Pié-->
<?php include('footer.php'); ?> 
