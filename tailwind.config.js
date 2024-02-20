/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/movies/index.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}

