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
    'prettier',
  ],
  plugins: [

  ],
  rules: {
    'linebreak-style': 'off', // Неправильно работает в Windows.
    'arrow-parens': 'off', // Несовместимо с prettier
    'object-curly-newline': 'off', // Несовместимо с prettier
    'no-mixed-operators': 'off', // Несовместимо с prettier
    'function-paren-newline': 'off', // Несовместимо с prettier
    'no-plusplus': 'off',
    'space-before-function-paren': 0, // Несовместимо с prettier
    'max-len': ['error', 100, 2, {ignoreUrls: true,}],
    'prefer-destructuring': 'off',
    indent: 'off',
    'vue/require-v-for-key': 'off',
  }
}
