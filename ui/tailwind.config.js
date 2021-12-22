module.exports = {
  purge: {
    enabled: true,
    content: [
        './*.html'
    ]
  },
  // purge: [],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        "background-default": '#f7f8f9',
        "primary": '#11325B',
        "dark-primary": '#001F46',
        "orange": '#FF9E01'
      }
    },
  },
  variants: {
    extend: {
      display: ['dark']
    },
  },
  plugins: [],
}
