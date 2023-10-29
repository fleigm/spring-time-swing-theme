const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: {
                'primary': '#22292f',
                'secondary': '#606f7b',

                'primary-inverse': '#f1f5f8',
                'secondary-inverse': '#dae1e7',
            },
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: null
                    },
                },
            },
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
        }
    },
    plugins: [
        tailpress.tailwind,
        require('@tailwindcss/typography'),

    ]
};
