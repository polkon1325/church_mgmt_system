/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      screens: {
        'xsm': '320px'
      },
      colors: {
        DirtyWhite: {
          1: '#F5F5F5',
          2: '#FFFFF0',
          3: '#F5FEFD',
          4: '#F2EBDD',
          5: '#ECE7E1'
        },
        MatteBlack: {
          1: '#10100e'
        }
      }
    },
  },
  plugins: [],
}

