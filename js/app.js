(async function load () {
    const searchBtn = document.getElementById('js-searchBtn')
    const inputSearch = document.getElementById('js-searchInput');
    const mobileMenu = document.getElementById("js-mobileMenu");
    const mobileNavbar = document.getElementById('js-mobileNavbar');
    const closeMobileMenu = document.getElementById("js-closeMobileMenu");

    // Show Search Bar
    function showInputSearch() {
        inputSearch.classList.add('Search__active')
        searchBtn.classList.add('SearchBtn__hide')
    }

    function hideInputSearch() {
        inputSearch.classList.remove('Search__active')
        searchBtn.classList.remove('SearchBtn__hide')
    }

    searchBtn.addEventListener('click', showInputSearch);
    inputSearch.addEventListener('dblclick', hideInputSearch);

    
    // Show Mobile Menu
    function showMobileMenu() {mobileNavbar.classList.add('js-menuActive');}
    function hideMobileMenu() {mobileNavbar.classList.remove('js-menuActive');}



    mobileMenu.addEventListener('click', showMobileMenu);
    closeMobileMenu.addEventListener('click', hideMobileMenu);

})()