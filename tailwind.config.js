module.exports = {
  content: [
    "./template-parts/*.php",
    "./templates/*.php",
    "./header.php",
    "./footer.php",
    "./index.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
