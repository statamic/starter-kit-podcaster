module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './resources/**/*.antlers.html',
      './resources/**/*.blade.php',
      './content/**/*.md'
    ]
  },
  important: true,
  theme: {
    fontFamily: {
      sans: ['Inter var', 'Inter', 'sans-serif'],
      mono: ['IBM Plex Mono', 'monospace'],
    },
    extend: {
      borderWidth: {
        3: '3px',
      },
      boxShadow: {
        '3xl': '40px 60px 90px -15px rgba(0, 0, 0, 0.3)',
      },
      colors: {
        primary: 'var(--primary-color)',
        secondary: 'var(--secondary-color)'
      },
      screens: {
        'tall': {'raw': 'min-height(900px)'},
      },
    },
  },
  variants: {},
  plugins: [],
}
