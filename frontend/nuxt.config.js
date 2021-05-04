export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'frontend',
    htmlAttrs: {
      lang: 'en',
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
  },
  css: [],
  plugins: [],
  components: true,
  buildModules: [
    '@nuxtjs/eslint-module',
    '@nuxtjs/stylelint-module',
  ],
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    "@nuxtjs/style-resources"
  ],
  axios: {
    baseURL: 'http://poluostrov-nuxt.local/',
    proxy: true,
    credentials: true,
  },
  proxy: {
    '/api/': {
      target: 'http://poluostrov-nuxt.local/api/',
      pathRewrite: {'^/api/': ''}
    },
  },
  build: {},
  styleResources: {
    scss: ["./assets/scss/*.scss"]
  },
  graphql: {
    clients: {
      default: {
        endpoint: '/backend/api',
        options: {},
      }
    }
  }
}
