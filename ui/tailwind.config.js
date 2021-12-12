module.exports = {
  purge: {
    enabled: true,
    content: [
        './*.html'
    ]
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        "primary": '#11325B',
        "dark-primary": '#001F46',
        "orange": '#FF9E01'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
