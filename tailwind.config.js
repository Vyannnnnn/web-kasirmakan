/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/*.php", "./app/Views/**/*.php", "./app/Views/**/**/*.php", "./app/Views/**/**/**/*.php", "./node_modules/flowbite/**/*.js"],
  theme: {
    colors: {
      primary: "#2E8CAD",
    },
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [require("flowbite/plugin"), require("@tailwindcss/forms")],
};
