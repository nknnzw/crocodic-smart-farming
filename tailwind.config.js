export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  plugins: [require("daisyui")],
}
tailwind.config = {
      theme: {
        extend: {
          colors: {
            'hijau-tua': '#1F4E20',
            'hijau-muda': '#7FD083',
            'hijau-paling-muda': '#F4FAF4',
            'abu-abu': '#9E9E9E',
            'abu-muda': '#EEEEEE',
          },
          fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
          }
        }
      }
    }