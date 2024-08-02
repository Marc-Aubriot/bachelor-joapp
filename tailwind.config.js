import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'light-blue': '#3E90C7',
                'heavy-blue': '#2664A0',
                'light-red': '#FE5757',
                'heavy-red': '#983434',
            },
            height: {
                '120': '120px',
                '45': '45px',
            },
            width: {
                '45': '45px',
            },
        },
    },

    plugins: [forms, typography],
};
