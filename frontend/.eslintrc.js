module.exports = {
  root: true,
  env: {
    browser: true,
    node: true,
  },
  parserOptions: {
    parser: 'babel-eslint',
  },
  extends: [
    '@nuxtjs',
    'plugin:nuxt/recommended',
  ],
  plugins: [],
  // add your custom rules here
  rules: {
    'linebreak-style': 'off', // Неправильно работает в Windows.
    'arrow-parens': 'off', // Несовместимо с prettier
    'object-curly-newline': 'off', // Несовместимо с prettier
    'no-mixed-operators': 'off', // Несовместимо с prettier
    'function-paren-newline': 'off', // Несовместимо с prettier
    'no-plusplus': 'off',
    'space-before-function-paren': 0, // Несовместимо с prettier
    'max-len': ['error', 100, 2, { ignoreUrls: true, }], // airbnb позволяет некоторые пограничные случаи
    'no-console': 'error', // airbnb использует предупреждение
    'no-alert': 'error', // airbnb использует предупреждение
    "radix": "off", // parseInt, parseFloat и radix выключены. Мне это не нравится.
    'prefer-destructuring': 'off',
    "indent": ["error", 2]
  }
}
