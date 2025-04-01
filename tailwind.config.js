/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{php,js,html}'],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['poppins','sans-serif'],
      },
      colors: {
        basecolor: "#0099CC",
        darkbasecolor : "#0084b0",
        slate: "#64748b",
      }
    },
  },
  plugins: [],
}