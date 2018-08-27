(async function load () {
    const searchBtn = document.getElementById('SearchBtn')
    const inputSearch = document.getElementById('SearchInput');
    // debugger

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
    // console.log(SearchBtn)
})()