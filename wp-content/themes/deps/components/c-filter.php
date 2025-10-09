<!-- Filtros -->
<form class="controls c-catalogo__control">


    <!-- filtros -->
    <div class="c-accordion__head c-catalogo__control-head js-accordion-trigger u-none@md" id="js-head-accordion-filter" >
        <div class="c-accordion__content-btn">
            <button class="c-accordion__btn-trigger">Mostrar Filtros</button> 
            <i class="fa-solid fa-angle-down c-accordion__icon-trigger c-accordion__icon-trigger--open js-accordion-icon"></i>
        </div>
    </div>



    <div class="c-accordion__content c-catalogo__control-content js-accordion-content u-dblock@md" id="js-content-accordion-filter">
            
            <!-- Filtros del perfiles -->
            <fieldset class="c-catalogo__content-filter" data-filter-group class="checkbox-group">

                <label class="checkbox-group-label c-catalogo__title-filter o-text--paragraph-bold" >Filtrar por perfiles</label>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".personal-medico" id="js-check-medic"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/user-doctor-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Personal médico</label>
                </div>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".personal-de-enfermeria"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/user-nurse-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Personal de enfermería</label>
                </div>


                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".personal-directivo"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/briefcase-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Personal directivo</label>
                </div>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".personal-docente"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/graduation-cap-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Personal docente</label>
                </div>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox" type="checkbox" value=".personal-multidisciplinario-de-salud"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/users-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Equipo multidisciplinario</label>
                    <!-- <span class="c-catalogo__counter">
                        <small class="c-catalogo__number o-text--paragraph" id="js-count-all"></small>
                    </span> -->
                </div>

            </fieldset>


            <!-- Filtros dde activos  -->
            <fieldset  class="c-catalogo__content-filter" data-filter-group class="checkbox-group">

                <label class="checkbox-group-label c-catalogo__title-filter o-text--paragraph-bold" >Filtrar por inscripciones</label>
            
                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox" id="vigente" type="checkbox"  value=".Vigente"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/circle-check-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Inscripciones abiertas</label>
                    <!-- <span class="c-catalogo__counter">
                        <small class="c-catalogo__number o-text--paragraph" id="js-count-act"></small>
                    </span> -->
                </div>

                <div class="checkbox c-catalogo__input-group">
                    <input class="c-catalogo__checkbox"  type="checkbox" value=".Desactualizado"/>
                    <img class="c-catalogo__icon" src="<?php bloginfo('template_url') ?>/src/img/icons/circle-xmark-solid.svg" alt="">
                    <label class="checkbox-label c-catalogo__label o-text--paragraph">Inscripciones cerradas</label>
                    <!-- <span class="c-catalogo__counter">
                        <small class="c-catalogo__number o-text--paragraph" id="js-count-des"></small>
                    </span> -->
                </div>

                
            </fieldset>
            <button type="reset" class="c-catalogo__btn-reset o-btn o-btn--small o-btn--secondary o-btn--extend">Limpiar Filtros</button>
        </div>


</form>