<?php  
    /*
    Template Name: Promoción
    */
?>

<!--/*Cabecera-->
<?php include('header.php'); ?>

   <!--/*Menú-->
   <?php include('components/c-menu.php'); ?>
       <!-- Carrusel  -->
    <section class="c-carousel">
        <div class="c-carousel__wrapper">
            <div class="owl-carousel js-owl-carousel owl-theme">

            <!--/Card-->
            <?php if( have_rows('carouselPromo') ): ?>
            <?php while( have_rows('carouselPromo') ): the_row();
                $tittle = get_sub_field('tittle');
                $description = get_sub_field('description');
                $img = get_sub_field('img');
            ?>
                <div class="c-carousel__item c-carousel__item--in c-carousel__item--in-promo item"
                    style="background-image: url('<?php the_sub_field('img'); ?>');">
                    <div class="c-carousel__content-text c-carousel__content-text--in js-animate-text animation-slide-in-up">
                        <h2 class="c-carousel__tittle--promo">
                            <?php the_sub_field('tittle'); ?></h2>
                        <p class="c-carousel__paragraph--sm"><?php the_sub_field('description'); ?></p>
                        
                        <?php if( have_rows('carouselPromoBtn') ): ?>
                        <?php while( have_rows('carouselPromoBtn') ): the_row();
                            $text = get_sub_field('text');
                            $linkIn = get_sub_field('linkIn');
                        ?>
                            <a class="o-btn o-btn--small o-btn--secondary o-btn--md u-mB5" href="<?php the_sub_field('linkIn'); ?>"><?php the_sub_field('text'); ?></a>
                        <?php endwhile; else: ?>
                        <?php endif; ?> 


                        <?php if( have_rows('carouselPromoBtnExt') ): ?>
                        <?php while( have_rows('carouselPromoBtnExt') ): the_row();
                            $text = get_sub_field('text');
                            $linkExt = get_sub_field('linkExt');
                        ?>
                            <a class="o-btn o-btn--small o-btn--primary o-btn--md" href="<?php the_sub_field('linkExt'); ?>"><?php the_sub_field('text'); ?></a>
                        <?php endwhile; else: ?>
                        <?php endif; ?> 

                    </div>
                </div>

            <?php endwhile; else: ?>
            <?php endif; ?> 
          </div>
        </div>
    </section><!-- Carrusel  edn-->


    <!-- Cátalogo-->
    <div class="c-catalogo">


        <!-- Fichas  -->
        <div class="container c-catalogo__container c-catalogo__container--promo">





            <!-- Título-->
            <div class="c-catalogo__head--promo">
                <h2 class="c-catalogo__tittle--promo">
                    <?php the_field('tittle-promo'); ?>
                </h2>

                <p class="c-catalogo__descript--promo">
                    <?php the_field('descript--promo'); ?>
                </p>

            </div>


            <!--/Card-->
            <?php if( have_rows('card-promo') ): ?>
            <?php while( have_rows('card-promo') ): the_row();
                $tittle = get_sub_field('tittle');
                $img = get_sub_field('img');
                $link = get_sub_field('link');
            ?>

                <!-- Ficha de curso -->
                <div class="c-card c-card--promo" onClick="location.href='<?php the_sub_field('link'); ?>'" >

                    <!-- Curso -->
                    <div class="c-card__wrapper">
                        
                        <div class="c-card__col-1"> 

                            <div class="c-card__content-date--wrapper c-card__wrapper-date--Vigente">     
                                
                                <?php if( have_rows('inscriptionsPromo') ): ?>
                                <?php while( have_rows('inscriptionsPromo') ): the_row();
                                    $inscription = get_sub_field('inscription');
                                ?>
                                <?php $inscriptionspromoStartDay = date_i18n("j", strtotime(get_sub_field('inscription'))); ?>
                                <?php $inscriptionspromoStartMonthYear = date_i18n("M Y", strtotime(get_sub_field('inscription'))); ?>


                                <!-- Dates -->
                                <div class="c-card__content-date ">
                                    <small class="c-card__date-descript o-text--small">Inicio de <br>incripción</small>
                                    <span class="c-card__date-day"><?php echo $inscriptionspromoStartDay; ?></span>
                                    <small class="c-card__date-descript o-text--small"><?php echo $inscriptionspromoStartMonthYear; ?></small>
                                </div>

                            <?php endwhile; else: ?>
                            <?php endif; ?> 


                             </div>

                            <!-- Img -->
                            <div class="c-card__content-img">
                                <div class="c-card__shadow"></div>
                                 <img class="c-card__img" src="<?php the_sub_field('img'); ?>">
                            </div>
                        </div>

                        <div class="c-card__col-2">

                            
                            <!-- Título del curso  -->
                            <div class="c-card__content-text">


                                <h2 class="c-card__tittle-curso">
                                    <?php the_sub_field('tittle'); ?>
                                </h2>
                                
                                <?php if( have_rows('inscriptionsPromo') ): ?>
                                <?php while( have_rows('inscriptionsPromo') ): the_row();
                                    $startCursoPromo = get_sub_field('startCursoPromo');
                                    $closeCursoPromo = get_sub_field('closeCursoPromo');
                                ?>

                                <?php $cursopromoStartDay = date_i18n("j", strtotime(get_sub_field('startCursoPromo'))); ?>
                                <?php $cursopromoStartMonth = date_i18n("M", strtotime(get_sub_field('startCursoPromo'))); ?>
                                <?php $cursopromoStartYear = date_i18n("Y", strtotime(get_sub_field('startCursoPromo'))); ?>
                                <?php $cursopromoCloseDay = date_i18n("j", strtotime(get_sub_field('closeCursoPromo'))); ?>
                                <?php $cursopromoCloseMonth = date_i18n("M", strtotime(get_sub_field('closeCursoPromo'))); ?>
                                <?php $cursopromoCloseYear = date_i18n("Y", strtotime(get_sub_field('closeCursoPromo'))); ?>

                                    <small class="c-card__date-descript o-text--small">Inicio <?php echo $cursopromoStartDay; ?> de <?php echo $cursopromoStartMonth; ?> al <?php echo $cursopromoCloseDay ?> de <?php echo $cursopromoCloseMonth; ?> de <?php echo $cursopromoCloseYear; ?></small>
                                <?php endwhile; else: ?>
                                <?php endif; ?>

                            </div>
                            <!-- Perfiles -->
                            <div class="c-card__content-tags-perfiles">

                                <div class="c-card__tittle-tags">
                                    <small class="c-card__tittle-tags o-text--small-bold u-none@xs-only">PERFILES</small>
                                </div>


                                <?php
                                $tags = get_sub_field('tags');
                                if( $tags ): ?>
                              
                                    <?php foreach( $tags as $tag ): ?>
                                         <div class="o-tag js-tag--<?php echo $tag; ?>">
                                           <span class="o-tag__pin o-tag__pin--<?php echo $tag; ?>"></span>
                                        </div>
                                    <?php endforeach; ?>
                       
                                <?php endif; ?>

                             <!-- Btn --> 

                            </div>

                            <a href="<?php the_sub_field('link'); ?>" class="o-link o-link--primary c-card__link-promo">MÁS DETALLES<i class="o-link__icon fa-solid fa-arrow-right-long"></i></a>
                            </div>
                    </div>  
                </div>

            <?php endwhile; else: ?>  
            <?php endif; ?>
  
        </div><!-- Fichas  -->


    </div><!-- Cátalogo- -->


<!--/*Pié-->
<?php include('footer.php'); ?> 
