/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#F65050",
                dark: "#111111",
                light: "#FFFFFF",
            },
            screens: {
                phone: "480px",
                lg: "1032.22px",
                xl: "1285px",
                "2xl": "1320px",
            },
            fontFamily: {
                body: ["Inter"],
            },
            height: {
                gede: "500px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
