const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      fontFamily: {
        roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
        poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
      },
      fontSize: {
        'hero-1': '5.3125rem', // 85px
      },
      colors: {
        'black': '#141515',
      },
    },
  },
  plugins: [],
};
