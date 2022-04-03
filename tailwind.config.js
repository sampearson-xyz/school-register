module.exports = {
  content: [
      "./resources/**/*.blade.php",
  ],
  important: true,
  theme: {
    extend: {
        colors: {
            'deep-blue': '#0F172A',
            'tailwind-blue': '#3C81F6'
        },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
