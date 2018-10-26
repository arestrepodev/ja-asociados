(async function load () {
    // Const Search Functionality
    const searchBtn = document.getElementById('js-searchBtn')
    const inputSearch = document.getElementById('js-searchInput')
    const closeSearch = document.getElementById('js-closeSearch')
    const submitSearch = document.getElementById('js-submitSearch')

    // Const Navbar Functionality
    const mobileMenu = document.getElementById("js-mobileMenu")
    const mobileNavbar = document.getElementById('js-mobileNavbar')
    const closeMobileMenu = document.getElementById("js-closeMobileMenu")

    // Show Search Bar
    function showInputSearch() {
        inputSearch.classList.add('Search__active')
        searchBtn.classList.add('SearchBtn__hide')
        closeSearch.classList.add('is--block')
        submitSearch.classList.add('is--block')
    }

    function hideInputSearch(event) {
        event.preventDefault();
        inputSearch.classList.remove('Search__active')
        inputSearch.value = '';
        searchBtn.classList.remove('SearchBtn__hide')
        closeSearch.classList.remove('is--block')
        submitSearch.classList.remove('is--block')
    }

    searchBtn.addEventListener('click', showInputSearch)
    closeSearch.addEventListener('click', hideInputSearch)

    
    // Show Mobile Menu
    function showMobileMenu() {mobileNavbar.classList.add('js-menuActive')}
    function hideMobileMenu() {mobileNavbar.classList.remove('js-menuActive')}



    mobileMenu.addEventListener('click', showMobileMenu)
    closeMobileMenu.addEventListener('click', hideMobileMenu)
    

    // Display Block Submenus for left Menu
    const pageCurrentSubMenu = document.querySelector('.current-menu-item')
    pageCurrentSubMenu.parentElement.style.display = "block"


})()