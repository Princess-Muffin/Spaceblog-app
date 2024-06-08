import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        screens: {
            'mobile': '375px',
            // => @media (min-width: 375px) { ... }
    
            'tablet': '768px',
            // => @media (min-width: 768px) { ... }
    
            'laptop': '1024px',
            // => @media (min-width: 1024px) { ... }
    
            'desktop': '1440px',
            // => @media (min-width: 1440px) { ... }
          },
          
        extend: {
                gridTemplateRows: {
                'Hlayout': 'auto auto 2fr auto',
                'Alayout': 'auto auto auto 2fr auto',
                'Playout': 'auto 1fr  auto',
                },
            },
    plugins: [forms],

    }
};
