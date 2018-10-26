
<!-- Form Search -->
<form action="<?php echo esc_url( home_url( '/' ) );?>" class="Search">
    <!-- Dynamic Search -->
    <a id="js-searchBtn" class="Search__btn">
        <i class="icon-search Search__icon"></i>
    </a>
    <!-- Icon Close -->
    <a href="" id="js-closeSearch" class="Search__close">
        <i class="icon-cross"></i>
    </a>
    <!-- Search Input -->
    <input type="search" id="js-searchInput" class="Search__input"  name="s" placeholder="<?php echo esc_attr_x( '¿Qué Deseas Buscar?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>">
    
    <!-- Search Submit -->
    <button id="js-submitSearch" type="submit" class="Search__submit" title="Buscar">
        <i class="icon-search"></i>
    </button>
</form>