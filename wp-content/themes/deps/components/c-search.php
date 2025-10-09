<!-- Buscador CES  -->
<?php if ( $postName == 'post'): ?>    

    <form role="search" method="get" class="search__form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <input type="search" class="search__field" placeholder="<?php echo esc_attr_x( 'Busca Cursos o diplomados …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <input type="hidden" name="post_type" value="post" />
        </label>
        
        <input type="submit" class="search__submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>





    <!-- Buscador Microaprendizajes  -->
        
    <?php elseif ( $postName == 'microaprendizaje'): ?>   
        
        <form role="search" method="get" class="search__form" action="<?php echo home_url( '/' ); ?>">
            <label>
                <input type="search" class="search__field" placeholder="<?php echo esc_attr_x( 'Busca Cursos de Microaprendizaje', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <input type="hidden" name="post_type" value="microaprendizaje" />
            </label>
       

            <input type="submit" class="search__submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </form>
        

    <!-- Buscador Microaprendizajes  -->
    <?php elseif ( $postName == 'gestiondirectiva'): ?>

        <form role="search" method="get" class="search__form" action="<?php echo home_url( '/' ); ?>">
            <label>
                <input type="search" class="search__field" placeholder="<?php echo esc_attr_x( 'Busca Cursos de Gestión Directiva', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <input type="hidden" name="post_type" value="gestiondirectiva" />
            </label>

            <input type="submit" class="search__submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </form>

    <!-- Buscador Catálogo maestro  -->
    <?php else: ?>

        <form role="search" method="get" class="search__form" action="<?php echo home_url( '/' ); ?>">
            <label>
                <input type="search" class="search__field" placeholder="<?php echo esc_attr_x( 'Busca un tema', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <input type="hidden" name="post_type" value="catmaestro" />
            </label>

            <input type="submit" class="search__submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </form>
<?php endif; ?>