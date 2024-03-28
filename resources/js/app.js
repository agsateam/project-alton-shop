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

// Swiper JS
const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination],
    slidesPerView: 5,
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
// End Swiper JS

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
});
