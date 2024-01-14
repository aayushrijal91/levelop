/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1380px',
      '2xl': '1600px',
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'primary': '#060606', // black
        'secondary': '#acce31',
        'button-bg': '#5C95CA',
        'text-white': '#FAFAFA',
        'review-bg': '#728291',
        'form-bg': '#72829133',
      },
      fontFamily: {
        raleway: ['Raleway', 'sans-serif'],
        faktum: ['Faktum', 'sans-serif'],
        urbane: ['Urbanist', 'sans-serif'],
      },
      objectPosition: {
        'right-10': '30% center',
      },
      dropShadow: {
        'renovation-grid': '0 4px 4px rgba(0, 0, 0, 0.25)',
      },
      scale: {
        '140': '1.40',
      }
    },
  },
  plugins: [],
}
