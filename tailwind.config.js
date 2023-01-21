/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './resources/**/*.{blade.php, vue}',
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ["Young", "sans-serif"],
            allroundermonument: ["AllrounderMonument", "serif"]
        }
    },
  },
  plugins: [],
}
