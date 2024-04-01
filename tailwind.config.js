import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        colors: {
            price: "#FF4206",
        },
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
        require("daisyui"),
    ],

    daisyui: {
        themes: [
            {
                smokyTopaz: {
                    primary: "#9A3B3B",
                    secondary: "#830E0E",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
                lightTaupe: {
                    primary: "#B19470",
                    secondary: "#9D703A",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
                rhythm: {
                    primary: "#7077A1",
                    secondary: "#4E599C",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
                dark: {
                    primary: "#333333",
                    secondary: "#262525",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
                blackberry: {
                    primary: "#85586F",
                    secondary: "#84345D",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
                brownShadow: {
                    primary: "#8D7B68",
                    secondary: "#886A4B",
                    accent: "#37cdbe",
                    neutral: "#3d4451",
                    "base-100": "#ffffff",
                },
            },
        ],
    },
};
