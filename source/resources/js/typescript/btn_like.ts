'use strict';
{

    let likeCounter = document.getElementsByClassName("like-counter");
    const LIKE_BTN = document.getElementsByClassName("like");

    for (let i = 0; i < LIKE_BTN.length; i++) {
        LIKE_BTN[i].addEventListener("click", () => {
            const num = parseInt(likeCounter[i].textContent);
            LIKE_BTN[i].classList.toggle("color-change");
            LIKE_BTN[i].classList.toggle("fas");
            LIKE_BTN[i].classList.toggle("far");
            if (LIKE_BTN[i].classList.contains("color-change")) {
                likeCounter[i].textContent = String(num + 1);
            } else {
                likeCounter[i].textContent = String(num - 1);
            }
        })
    };
} 