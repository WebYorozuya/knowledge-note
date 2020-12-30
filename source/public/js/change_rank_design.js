'use strict';
{
    const CROWN = document.getElementsByClassName("crown");
    const RANK = document.getElementsByClassName("rank");

    for (let i = 0; i < RANK.length; i++) {
        const number = RANK[i].textContent;
        if (number == 1) {
            RANK[i].classList.add("rank-1");
        }
        if (number == 2) {
            RANK[i].classList.add("rank-2");
        }
        if (number == 3) {
            RANK[i].classList.add("rank-3");
        }
        if (number == 4) {
            RANK[i].classList.add("rank-4");
        }
        if (number == 5) {
            RANK[i].classList.add("rank-5");
        }
        if (number < 4) {
            CROWN[i].classList.add("block");
        }
    };
}  