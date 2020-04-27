module.exports = {
  theme: {
    extend: {
      width:{
        'fix': '22rem',
      },
      margin:{
        'fix': '-1rem',
      }
    },
    spinner: (theme)=>({
      default:{
        color: '#dae1e7',
        size: '1em',
        border: '2px',
        speed: '500ms',
      }
    })
  },
  variants: {},
  plugins: [
    require('tailwindcss-spinner')(),
  ],
}
