/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './resources/**/*.{blade.php, vue}',
      './resources/views/*.blade.php',
      './resources/views/**/*.blade.php'
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ["Young", "sans-serif"],
            asap: ["Asap", "serif"]
        },
        screens: {
            xs: "500px"
        }
    },
  },
  plugins: [
      require('@tailwindcss/typography')
  ],
}
