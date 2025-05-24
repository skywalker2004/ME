/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#3B82F6',
        secondary: '#8B5CF6',
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
      },
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      fontSize: {
        '4.5xl': '2.5rem',
        '5.5xl': '3rem',
      },
    },
  },
  plugins: [],
  darkMode: 'class',
}
