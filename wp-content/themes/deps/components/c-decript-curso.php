<div class="c-curso__decript-curso c-post--<?php echo $postName; ?>">
<div class="c-curso__wrapper-descript">
    
    <div class="c-tabs">

        <!-- Cabaceras de tabs-->
        <ul class="c-tabs__headings js-tabs-headings">
            <!-- the first tab is selected by default -->
            <li class="c-tabs__heading">
                <a class="c-tabs__link c-tabs__link--active" href="#tab1">Acerca del curso</a>
            </li>
            <li class="c-tabs__heading ">
                <a  class="c-tabs__link" href="#tab2">Reglas de Inscripción</a>
            </li>
            <li class="c-tabs__heading">
                <a class="c-tabs__link" href="#tab3">Preguntas frecuentes</a>
            </li>
        </ul>

 
        <!-- Contenido -->
        <div class="c-tabs__content-content-tabs js-tabs-content"> 
            
                <!-- tab 1 -->
                <div id="tab1"  class="c-tabs__content-tab c-tabs__content-tab--active" >


                    <div class="c-tabs__content-text c-descript-curso">

                        <!-- Dirigido a-->
                        <h2>Dirigido a</h2>

                        <?php 
                        if ( $postName == 'post'): ?>

                            <p><?php the_field('forTo'); ?></p>

                        <?php elseif ( $postName == 'microaprendizaje'): ?>

                            <p><?php the_field('person'); ?></p>

                        <?php else: ?>
                        <?php endif; ?>


                        <!-- Acerca del curso EAD-->
                        <?php 
                        if ( $postName == 'post'): ?>

                            <h2>Acerca del curso</h2>
                            <p><?php the_field('descriptCourse'); ?></p>

                        <?php endif; ?>


                        <!-- Acerca del curso EAD-->
                        <h2>Objetivo</h2>
                        <?php 
                        if ( $postName == 'microaprendizaje'): ?>

                            <p><?php the_field('objetivo'); ?></p>

                        <?php elseif ( $postName == 'post'): ?>

                            <p><?php the_field('objectiveCourse'); ?></p>

                        <?php else: ?>
                        <?php endif; ?>

                        <!-- Acerca del curso EAD-->
                        <?php 
                        if ( $postName == 'post'): ?>

                            <h2>Contenido</h2>
                            <?php the_field('contentCourse'); ?>

                        <?php endif; ?>


                        <!-- Ponente-->
                        <?php 
                        if ( $postName == 'microaprendizaje'): ?>

                            <h2>Ponente</h2>
                            <?php the_field('ponente'); ?>

                        <?php endif; ?>



                    </div>

                     <!-- Compatir -->
                    <?php include('c-share.php'); ?>
                    
                </div>

                <!-- tab 2 -->
                <div id="tab2"  class="c-tabs__content-tab" >
                    <div class="c-tabs__content-text c-descript-curso">
                        <h2>Reglas de inscripción</h2>
                        
                        <!--  Preguntas frecuentes -->
                        <?php include('statics/s-rules.php'); ?>

                    </div>
                </div>
                


                <!-- tab 3 -->
                <div id="tab3" class="c-tabs__content-tab " >
                     <div class="c-tabs__content-text c-descript-curso">
                     <h2>Preguntas frecuentes</h2>
                       
                        <!--  Preguntas frecuentes -->
                        <?php include('statics/s-faqs.php'); ?>
                    
                     </div>
                </div>

            </div>

        <!-- btns -->
        <?php 
            if ( $postName == 'post'): ?>

                <?php include('c-group-bts.php'); ?>

        <?php endif; ?>
        
    </div>
    
</div>
</div>