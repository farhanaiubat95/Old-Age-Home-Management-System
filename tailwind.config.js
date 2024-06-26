/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
    colors: {
      "primary":"#003C43",
      "Secondary":"#9AB8BD",
      "3rd":"#6F9196",
      "4th":"#A3BEC1",
      "5th":"#e7f0ef",
      "6th":"#DCF2F1",
      "7th":"#0E606E"
    },
    fontFamily:{
      roboto: ['Roboto', 'sans-serif'],     
    },


    },
  },
  plugins: [
    function ({addUtilities}) {
      const newUtilities = {
       ".not-scrollbar::-webkit-scrollbar":{
          display:"none",
       },
       ".not-scrollbar":{
        "-ms-overflow-style":"none",
        "scrollbar-width":"none",
       },
      };
      addUtilities(newUtilities);
    },
  ],
}