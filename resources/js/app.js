import "./bootstrap";
import { livewire_hot_reload } from "virtual:livewire-hot-reload";
// Flowbite
import "flowbite";
import { initFlowbite } from "flowbite";
// Swiper.js
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

livewire_hot_reload();

// Swiper Landing
function responsiveSlidePerView() {
    const swiper = new Swiper(".swiper", {
        modules: [Navigation, Pagination],
        grabCursor: true,
        // centeredSlides: true,
        loop: true,
        spaceBetween: 20,
        direction: "horizontal",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });

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
    swiper.update();
}

window.addEventListener("resize", responsiveSlidePerView); // Update on window resize

document.addEventListener("livewire:navigated", () => {
    initFlowbite();

    let path = window.location.pathname; // Get path

    // on landing page
    if (path == "/") {
        responsiveSlidePerView();
        window.addEventListener("resize", responsiveSlidePerView); // Update on window resize
    }

    // on checkout page
    if (path == "/checkout" || path == "/informasi-pribadi") {
        let selectProvince = document.querySelector("#province");
        let selectCity = document.querySelector("#city");
        let selectDistrict = document.querySelector("#district");
        // province select value changed
        selectProvince.addEventListener("change", (event) => {
            selectCity.innerHTML = `
                <option selected disabled>Pilih Kota</option>
                <option disabled>Loading ...</option>
            `;
            selectDistrict.innerHTML = `
                <option selected disabled>Pilih Kecamatan</option>
                <option disabled>Pilih kota lebih dulu.</option>
            `;

            fetch(
                `https://vardrz.github.io/api-wilayah-indonesia/static/api/regencies/${event.target.value}.json`
            )
                .then((response) => response.json())
                .then((data) => {
                    selectCity.innerHTML = `<option selected disabled>Pilih Kota</option>`;
                    data.forEach((item) => {
                        selectCity.innerHTML += `<option value="${item.id}">${item.name}</option>`;
                    });
                })
                .catch((error) => {
                    selectCity.innerHTML = `
                        <option selected disabled>Pilih Kota</option>
                        <option disabled>Data tidak ditemukan, reload halaman!</option>
                    `;
                });
        });
        // city select value changed
        selectCity.addEventListener("change", (event) => {
            selectDistrict.innerHTML = `
                <option selected disabled>Pilih Kecamatan</option>
                <option disabled>Loading ...</option>
            `;

            fetch(
                `https://vardrz.github.io/api-wilayah-indonesia/static/api/districts/${event.target.value}.json`
            )
                .then((response) => response.json())
                .then((data) => {
                    selectDistrict.innerHTML = `<option selected disabled>Pilih Kecamatan</option>`;
                    data.forEach((item) => {
                        selectDistrict.innerHTML += `<option value="${item.id}">${item.name}</option>`;
                    });
                })
                .catch((error) => {
                    selectDistrict.innerHTML = `
                        <option selected disabled>Pilih Kecamatan</option>
                        <option disabled>Data tidak ditemukan, reload halaman!</option>
                    `;
                });
        });
    }
});
