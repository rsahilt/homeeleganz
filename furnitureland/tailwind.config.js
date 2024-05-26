/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                lato: ["Lato", "sans-serif"],
            },
            colors: {
                primary: {
                    DEFAULT: "#FFBF69", // Replace this with your primary color hex code
                },
            },
        },
    },
    plugins: [],
};
