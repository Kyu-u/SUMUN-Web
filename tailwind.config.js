module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      inset: {
        '0': 0,
       '1/5': '20%',
       '1/6': '16.666666%',
       '1/12': '8.33333333%',
       '1/16': '6.25%'
      },

      colors: {
        signup: ['#57CA85'],
        main: ['#1F1F1F'],
        card: ['#27372C'],
        buttonactive: ['#2FCB6E'],
        foot: ['#E1E1E1'],
        footgr: ['#437959'],
        timelinetop: ['#57CA85'],
        timelinebot: ['#184E68'],
        time: ['#2FCB6E'],
        tablebg: ['#242E28'],
        tableisi: ['#1F5975'],
      },
      fontFamily: {
        navbar: ['Open Sans, sans-serif'],
        judul: ['Raleway, sans-serif']

      },
      width: {
        '1/7': '14.2857143%',
        '2/7': '28.5714286%',
        '3/7': '42.8571429%',
        '4/7': '57.1428571%',
        '5/7': '71.4285714%',
        '6/7': '85.7142857%',
        '30': '7.5rem',
        '120': '60rem'
      }
      
    },
  },
  variants: {
    scrollbar: ['rounded'],
    extend: {},
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
}
