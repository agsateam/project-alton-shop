import "./bootstrap";
import { livewire_hot_reload } from "virtual:livewire-hot-reload";
import "flowbite";
import { initFlowbite } from "flowbite";

import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

livewire_hot_reload();

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
    // Swiper JS
    const swiper = new Swiper(".swiper", {
        modules: [Navigation, Pagination],
        grabCursor: true,
        // centeredSlides: true,
        loop: true,
        spaceBetween: 20,
        // Optional parameters
        direction: "horizontal",
        loop: true,

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });

    // Function Responsive Swiper
    function responsiveSlidePerView() {
        if (window.innerWidth >= 1024) {
            swiper.params.slidesPerView = 5;
        } else if (window.innerWidth >= 840) {
            swiper.params.slidesPerView = 4;
        } else if (window.innerWidth >= 560) {
            swiper.params.slidesPerView = 3;
        } else if (window.innerWidth >= 425) {
            swiper.params.slidesPerView = 2;
        } else {
            swiper.params.slidesPerView = 1;
        }
        swiper.update(); // Update swiper instance
    }
    responsiveSlidePerView();

    window.onload = responsiveSlidePerView; // Update on page load
    window.addEventListener("resize", responsiveSlidePerView); // Update on window resize
    // End Swiper JS
});
