/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'media',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        colors: {
          },
      extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
