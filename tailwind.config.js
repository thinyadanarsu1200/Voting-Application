const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
      
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                "gray-background": "#f7f8fc",
                "blue": "#328af2",
                "blue-hover": "#2879bd",
                "yellow": "#ffc73c",
                "red": "#ec454f",
                "green": "#1aab8b",
                "purple":"#8b60ed",
            },
            spacing:{
                70: "17.5rem",
                175: "43.75rem",
            },
            maxWidth: {
                "custom": '64.25rem',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
