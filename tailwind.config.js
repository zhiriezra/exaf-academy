/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            'ezra-green-dark': '#0a3a12',
            'ezra-green-light': '#66966e',
            'ezra-green': '#287e36',
        },
    },
  },
  plugins: [],
}

