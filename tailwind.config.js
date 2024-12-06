import defaultTheme from 'tailwindcss/defaultTheme';

const sizes = {};

for (let i = 0; i < 500; i++) {
  sizes[i] = `${i / 4}rem`;
  sizes[`${i}.5`] = `${(i + 0.5) / 4}rem`;
}

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                darkblue: {
                    700: '#2c3e50',
                    800: '#233140',
                },
                green: {
                    700: '#18bc9c',
                    900: '#128f76',
                },
                gray: {
                    300: '#CCCCCC',
                    400: '#95a5a6',
                    500: '#555555',
                    700: '#2c3e50',
                }
            },
            spacing: sizes,
            fontSize: {
                sm: '15px',
            },
            boxShadow: {
                'input': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                'focus-input': 'inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)'
            },
            fontFamily: {
                'lato': 'lato'
            }
        },
    },
    plugins: [],
};
