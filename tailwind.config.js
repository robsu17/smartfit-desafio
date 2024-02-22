/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            'dark-grey': '#333333',
            'light-grey': '#808080',
            'yellow-smartfit': '#FFB612',
            'red-smartfit': '#dc0a17',
            'green-smartfit': '#2FC022'
        }
    },
  },
  plugins: [],
}

