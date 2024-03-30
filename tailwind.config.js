import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                nikol: {
                    50: '#f597ff',
                    100: '#e688ff',
                    200: '#d779f7',
                    300: '#c86ae8',
                    400: '#b95bd9',
                    500: '#8C2EAC', // Base color
                    600: '#6e108e',
                    700: '#5f017f',
                    800: '#500070',
                    900: '#410061',
                },
                creme: '#F4EDE9'
            }
        },
    },

    plugins: [forms],
};
