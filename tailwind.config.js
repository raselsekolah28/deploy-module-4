module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primaryBlack: "#202020",
        secondaryGray: "#8c8c8c"
      },
      width: {
        "w-32%": "32%",
        "48%": "48%"
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
