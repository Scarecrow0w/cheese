const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        screens: {
            'lg': {'max': '992px'},
            'md': {'max': '768px'},
            'sm': {'max': '480px'},
        },
        container: {
            padding: '20px',
            center: true
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#ffe169',
                secondary: '#491e17',
                lightbg: '#ffb600',
                darkbg: '#ff8500',
                mainbg: '#fdffb6',
                hover: '#772e25',
            },
            rotate: {
                '15': '15deg',
              },
            backdropOpacity: {
            15: '.15',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
