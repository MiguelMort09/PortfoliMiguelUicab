import forms from "@tailwindcss/forms";
import animations from "@midudev/tailwind-animations";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", "sans-serif"],
            },
            colors: {
                "bg-red-mort": "rgba(255, 0, 0, 0.7)",
            },
        },
    },

    plugins: [animations, forms],
};
