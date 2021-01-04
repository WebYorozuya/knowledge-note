'use strict';
{
    const SUB_SUB_ITEM = document.getElementsByClassName("sub-sub-item");
    const RANKING_FORM = document.getElementsByClassName("ranking-form");

    for (let i = 0; i < SUB_SUB_ITEM.length; i++) {
        SUB_SUB_ITEM[i].addEventListener("click", () => {
            RANKING_FORM[i].classList.toggle("ranking-form-show");
        })
    };
}  