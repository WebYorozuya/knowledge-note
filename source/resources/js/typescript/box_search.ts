const SEARCH_BOX = document.getElementById("search-box");
const SEARCH_BTN = document.getElementById("search-btn");

SEARCH_BTN.addEventListener("click",()=>{
    SEARCH_BOX.classList.toggle("search-box-show");
});