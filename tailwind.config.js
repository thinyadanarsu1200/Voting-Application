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
            fontSize:{
                xxs: ['0.625rem',{lineHeight:'1rem'}],
            },
            colors:{
                "gray-background": "#f7f8fc",
                "v-blue": "#328af2",
                "v-blue-hover": "#2879bd",
                "v-yellow": "#ffc73c",
                "v-red": "#ec454f",
                "v-green": "#1aab8b",
                "v-purple":"#8b60ed",
            },
            spacing:{
                72.5: "18.125rem",
                120.5: "30.125rem",
                122: "30.5rem",
                22: "5.5rem",
                7.5: "1.875rem",
                70: "17.5rem",
                76: "19rem",
                175: "43.75rem",
                104: "26rem",
            },
            maxWidth: {
                "custom": '64.25rem',
            },
            boxShadow:{
                card: '4px 4px 15px 0 rgba(36,37,38,0.08)',
                dialog: '3px 4px 15px 0 rgba(36,37,38,0.08)',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
