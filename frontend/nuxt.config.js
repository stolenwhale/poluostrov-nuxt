export default {
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
    '@nuxtjs/axios',
    "@nuxtjs/style-resources",
    '@nuxtjs/apollo',
    ['nuxt-lazy-load', {
      images: true,
      videos: true,
      audios: true,
      iframes: true,
      native: false,
      polyfill: true,
      directiveOnly: false,

      // Default image must be in the static folder
      // defaultImage: '/images/default-image.jpg',

      loadingClass: 'lazyLoad--is-loading',
      loadedClass: 'lazyLoad--is-loaded',
      appendClass: 'lazyLoad',

      observerConfig: {
        // See IntersectionObserver documentation
      }
    }]
  ],
  axios: {
    baseURL: 'http://localhost:1337/',
    proxy: true,
    credentials: true,
  },
  proxy: {
    '/api/': {
      target: 'http://localhost:1337/graphql/',
      pathRewrite: {'^/api/': ''}
    },
  },
  build: {},
  styleResources: {
    scss: ["./assets/scss/*.scss"]
  },
  apollo: {
    clientConfigs: {
      default: {
        httpEndpoint: 'http://localhost:1337/graphql',
      }
    }
  }
}
