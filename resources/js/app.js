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
        let selectCityValue = selectCity.getAttribute("value");
        let selectDistrict = document.querySelector("#district");
        let selectDistrictValue = selectDistrict.getAttribute("value");
        // province select value changed
        selectProvince.addEventListener("change", (event) => {
            selectCity.innerHTML = `
                <option value="" selected disabled>Pilih Kota</option>
                <option disabled>Loading ...</option>
            `;
            selectDistrict.innerHTML = `
                <option value="" selected disabled>Pilih Kecamatan</option>
                <option disabled>Pilih kota lebih dulu.</option>
            `;

            fetch(
                `https://vardrz.github.io/api-wilayah-indonesia/static/api/regencies/${
                    event.target.options[event.target.selectedIndex].id
                }.json`
            )
                .then((response) => response.json())
                .then((data) => {
                    selectCity.innerHTML = `<option value="" selected disabled>Pilih Kota</option>`;
                    data.forEach((item) => {
                        if (selectCityValue == item.name) {
                            selectCity.innerHTML += `<option value="${item.name}" id="${item.id}" selected>${item.name}</option>`;
                        } else {
                            selectCity.innerHTML += `<option value="${item.name}" id="${item.id}">${item.name}</option>`;
                        }
                    });
                })
                .catch((error) => {
                    selectCity.innerHTML = `
                        <option value="" selected disabled>Pilih Kota</option>
                        <option disabled>Data tidak ditemukan, reload halaman!</option>
                    `;
                });
        });
        // city select value changed
        selectCity.addEventListener("change", (event) => {
            selectDistrict.innerHTML = `
                <option value="" selected disabled>Pilih Kecamatan</option>
                <option disabled>Loading ...</option>
            `;

            fetch(
                `https://vardrz.github.io/api-wilayah-indonesia/static/api/districts/${
                    event.target.options[event.target.selectedIndex].id
                }.json`
            )
                .then((response) => response.json())
                .then((data) => {
                    selectDistrict.innerHTML = `<option value="" selected disabled>Pilih Kecamatan</option>`;
                    data.forEach((item) => {
                        if (selectDistrictValue == item.name) {
                            selectDistrict.innerHTML += `<option value="${item.name}" id="${item.id}" selected>${item.name}</option>`;
                        } else {
                            selectDistrict.innerHTML += `<option value="${item.name}" id="${item.id}">${item.name}</option>`;
                        }
                    });
                })
                .catch((error) => {
                    selectDistrict.innerHTML = `
                        <option value="" selected disabled>Pilih Kecamatan</option>
                        <option disabled>Data tidak ditemukan, reload halaman!</option>
                    `;
                });
        });
    }

    if (path == "/panduan") {
        //panduan
        const acccordincontent =
            document.querySelectorAll(".accordion-content");
        const accordionicons = document.querySelectorAll(".accordion-icons");
        document.addEventListener("click", function () {
            acccordincontent.forEach((content, index) => {
                if (content.classList.contains("hidden")) {
                    accordionicons[index].classList.remove("rotate-45");
                } else {
                    accordionicons[index].classList.add("rotate-45");
                }
            });
        });
    }
});
