// tailwind.config.js

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        brown: {
          '50': '#f7f3e9',
          '100': '#f0e0c9',
          '200': '#e1b391',
          '300': '#cf8d5a',
          '400': '#b97036',
          '500': '#9b5829',
          '600': '#804720',
          '700': '#653518',
          '800': '#4a2411', // Coklat dengan kecerahan 800
          '900': '#391e0d',
        },
      },
    },
  },
  plugins: [],
};
