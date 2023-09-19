const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    'btn-toolbar',
    'text-gray-400',
    'nav-primary',
    'nav-backdrop',
    {
      pattern: /^py-/,
      pattern: /^px-/,
      pattern: /^pt-/,
      pattern: /^pb-/,
      pattern: /^pl-/,
      pattern: /^pr-/,
      pattern: /^my-/,
      pattern: /^mx-/,
      pattern: /^mt-/,
      pattern: /^mb-/,
      pattern: /^ml-/,
      pattern: /^mr-/,
    },
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#3392BF',
        'primary-light': '#1C93FF',
        'primary-dark': '#0076D0',

        'secondary': '#6D6E6A',
        'secondary-light': '#1C93FF',
        'secondary-dark': '#0076D0',

        'tertiary': '#E89604',
      },

      container: {
        // center: true,
        padding: 0,
        // default breakpoints but with 40px removed
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1280px',
          '2xl': '1410px',
        },
      },

      fontFamily: {
        'sans': ['Cabin Condensed', ...defaultTheme.fontFamily.sans],
        'serif': ['Oswald', ...defaultTheme.fontFamily.sans],
      },
      aspectRatio: {
        '21/9': '21 / 9',
        '16/9': '16 / 9',
        '3/2': '3/ 2',
        '4/3': '4 / 3',
        '3/4': '3 / 4',
        '7/10': '7 /10',
      },
    },
  },
  plugins: [
    require('tailwind-children'),
  ],
};
