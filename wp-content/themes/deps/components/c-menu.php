    <!-- Haeder-->
    <header class="c-header">
        <div class="c-header__wrapper">
            <!-- header Gob  -->
            <div class="c-header__content">
                <!-- logotipo -->
                <a class="c-header__logo-link" href="https://www.gob.mx/">
                    <img class="c-header__logo-img" src="http://innovacioneducativa.imss.gob.mx/sitio_wp/wp-content/uploads/2024/10/logo_blanco.png" alt="DEPS IMSS">
                </a>
                <!-- menú gob -->
                <nav class="c-header__nav-gob">
                    <ul class="c-header__menu-gob">
                        <li class="c-header__menu-item">
                            <a class="c-header__menu-item-link o-font-menu" href="https://www.gob.mx/tramites" target="_blank">TRÁMITES</a>
                        </li>
                        <li class="c-header__menu-item">
                            <a class="c-header__menu-item-link o-font-menu" href="https://www.gob.mx/gobierno" target="_blank">GOBIERNO</a>
                        </li>
                        <a href="https://www.gob.mx/busqueda" target="_blank">                        
                            <i class="o-icon-menu fa-solid fa-magnifying-glass"></i>
                        </a>
                    </ul>
                </nav>
            </div><!-- header Gob end-->
            
            <!-- header DEPS -->
            <div class="c-header__content c-header__content--deps">
                <ul class="c-header__menu-deps">
                        
                    <li class="c-header__menu-item">
                        <a class="c-header__menu-item-link o-font-menu is-active" href="<?php bloginfo(url); ?>" >INICIO</a>
                    </li>

                    <li class="c-header__menu-item js-trigger-submenu">
                        <a class="c-header__menu-item-link o-font-menu" href="#">EDUCACIÓN PERMANENTE EN SALUD</a>
                        
                        <ul class="c-header__submenu-deps js-submenu">
                        
                            <li class="c-header__menu-item--sub">
                                <a class="c-header__menu-item-link c-header__menu-item-link--submenu-deps o-font-menu" href="<?php bloginfo(url); ?>/educacion-a-distancia/">EDUCACIÓN A DISTANCIA</a>
                            </li>
                
                            <li class="c-header__menu-item--sub js-trigger-subsubmenu">
                                <a class="c-header__menu-item-link c-header__menu-item-link--submenu-deps o-font-menu" href="#">EDUCACIÓN PRESENCIAL</a>
                                
                                <!-- sub sub  -->
                                <ul class="c-header__subsubmenu-deps js-subsubmenu">
                        
                                    <li class="c-header__menu-item--sub ">
                                        <a class="c-header__menu-item-link c-header__menu-item-link--submenu-deps c-header__menu-item-link--submenu-deps--sub o-font-menu" href="http://edumed.imss.gob.mx/bCurso/" target="_blank">CURSOS A CATÁLOGO</a>
                                    </li>
                        
                                    <li class="c-header__menu-item--sub">
                                        <a class="c-header__menu-item-link c-header__menu-item-link--submenu-deps c-header__menu-item-link--submenu-deps--sub o-font-menu" href="http://edumed.imss.gob.mx/Cursos/" target="_blank">SIPEC</a>
                                        
                                        
                                    </li>
                                </ul>
                                
                            </li>
                        </ul>
                    </li>
                    <li class="c-header__menu-item">
                        <a class="c-header__menu-item-link o-font-menu" href="http://innovacioneducativa.imss.gob.mx/mesa">MESA DE AYUDA VIRTUAL</a>
                    </li>
                </ul>
            </div><!-- header DEPS end-->

            <!-- Icon-->
            <i class="o-icon-menu o-icon-menu--trigger fa-solid fa-bars u-none@md js-toggle-menu-dropdown"></i><!-- icon -->

        </div>
    </header><!-- Haeder end-->

    <!-- Menú mobile -->
    <div class="c-menu-dropdown js-menu-dropdown">
        
        <!-- menú Gob  -->
        <div class="c-menu-dropdown__wrapper-all">
            <div class="c-menu-dropdown__wrapper-menu">
                <div class="c-menu-dropdown__container o-container">
                    <div class="c-menu-dropdown__col o-col__12@desktop o-col__8@tablet o-col__4@phone">
                        <div class="c-menu-dropdown__inner">
                            <nav class="c-menu-dropdown__nav" role="navigation">
                                <ul class="c-menu-dropdown__menu">
                                    <li class="c-menu-dropdown__menu-item">
                                        <a class="o-font-menu" href="https://www.gob.mx/tramites" target="_blank">TRÁMITES</a>
                                    </li>
                                    <li class="c-menu-dropdown__menu-item">
                                        <a class="o-font-menu" href="https://www.gob.mx/gobierno" target="_blank">GOBIERNO</a>
                                    </li>
                                    <li class="c-menu-dropdown__menu-item">
                                        <a class="o-font-menu" href="https://www.gob.mx/busqueda" target="_blank">BUSCAR
                                            <i class="o-icon-menu fa-solid fa-magnifying-glass"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- menú Gob  end-->

        <!-- menú Gob  -->
        <div class="c-menu-dropdown__wrapper-all c-menu-dropdown__wrapper-all--deps">
            <div class="c-menu-dropdown__wrapper-menu">
                <div class="c-menu-dropdown__container o-container">
                    <div class="c-menu-dropdown__col o-col__12@desktop o-col__8@tablet o-col__4@phone">
                        <div class="c-menu-dropdown__inner">
                            <nav class="c-menu-dropdown__nav" role="navigation">
                                <ul class="c-menu-dropdown__menu">
                                    <li class="c-menu-dropdown__menu-item">
                                        <a class="o-font-menu" href="<?php bloginfo(url); ?>">INICIO</a>
                                    </li>
                                    <li class="c-menu-dropdown__menu-item">
                                           <p class="o-font-menu o-font-menu--header">EDUCACIÓN PERMANENTE EN SALUD</p>
                                    </li>
                                    <li class="c-menu-dropdown__menu-item c-menu-dropdown__menu-item--sub">
                                        <a href="<?php bloginfo(url); ?>/educacion-a-distancia/" class="o-font-menu">EDUCACIÓN A DISTANCIA</a>
                                    </li>

                                    <li class="c-menu-dropdown__menu-item c-menu-dropdown__menu-item--sub">
                                        <p class="o-font-menu o-font-menu--header">EDUCACIÓN PRESENCIAL</p>
                                            <ul class="c-menu-dropdown__menu c-menu-dropdown--subsubmenu"> 
                                                <li class="c-menu-dropdown__menu-item u-pB0">
                                                    <a class="o-font-menu" href="http://edumed.imss.gob.mx/bCurso/" target="_blank">CURSOS A CATÁLOGO</a>
                                                </li>
                                                <li class="c-menu-dropdown__menu-item u-pB0">
                                                    <a class="o-font-menu" href="http://edumed.imss.gob.mx/Cursos/" target="_blank">SIPEC</a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li class="c-menu-dropdown__menu-item">
                                        <a class="o-font-menu" href="http://innovacioneducativa.imss.gob.mx/mesa" target="_blank">MESA DE AYUDA</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- menú Gob  end-->
    </div><!-- Menú mobile end -->
