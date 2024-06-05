/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily:{
                'urbanist': ['urbanist'],
                'montserrat': ['montserrat'],
            },
            colors:{
                background:'#30303D'
            },
        },
    },
    darkMode: "class",
}
