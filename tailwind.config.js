const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'brand-green': '#049669',
                'brand-lime': '#8bc53f',
                'lime': colors.lime,
                'teal': colors.teal,
            }

        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
