module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {

    screens: {
      'ip': '376px',
      'go': '500px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1290px',
      '2xl': '1536px',
     
    },
    
    extend: {

      fill: theme => ({
        'green': theme('colors.signup.0'),
        
      }),
      
      margin: {
        '26': '6.7rem'
        },
 
       padding: {
        '70': '17rem'
        },

      inset: {
        '0': 0,
       '1/5': '20%',
       '1/6': '16.666666%',
       '1/12': '8.33333333%',
        '1/16': '6.25%',
        'regisweb': '40rem',
        'regiswebmobile': '45rem',
        '-1/5': '-20%',
        '-1/6': '-16.666666%',
        '-1/10': '-10%',
        '-1/12': '-8.33333333%',
        '-1/16': '-6.25%',
        '-1/16': '-1,25%'
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
        dropdown: ['#409863'],
        cardprofile: ['#27372D'],
        border: ['#184E68'],
        garis: ['#C4C4C4'],
        adminbox: ['#C9C9C9'],
        secondheader: ['#51B97B'],
        councilbar: ['#317E73'],
        cardcouncil: ['#469766']
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
        '9/10': '90%',
        '30': '7.5rem',
        '100': '60rem',
        '99': '50rem',
        'regisgradient': '53rem',
        '98': '40rem',
        '97': '30rem',
        '120': '60rem',
        '8xl': '80rem',
  
      },
      height: {
        '1/7': '14.2857143%',
        '2/7': '28.5714286%',
        '3/7': '42.8571429%',
        '4/7': '57.1428571%',
        '5/7': '71.4285714%',
        '6/7': '85.7142857%',
        '30': '7.5rem',
        '100': '60rem',
        '99': '50rem',
        '98': '40rem',
        'regisgradient': '45rem',
        '97': '30rem',
        '120': '60rem',
  
      },

      maxWidth: {
        'screen-3xl' : '1920px',
      },

      fontSize: {
        xxs: ['0.65rem','1.15rem'],
        xxxs: ['0.475rem','0.84rem']
       },
      
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
