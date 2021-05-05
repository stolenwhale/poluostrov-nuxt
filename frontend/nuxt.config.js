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
  css: [
    '@/assets/scss/01_base.scss',
    '@/assets/scss/02_fonts.scss',
    '@/assets/scss/03_typography.scss',
  ],
  plugins: [],
  components: true,
  buildModules: [
    '@nuxtjs/eslint-module',
    '@nuxtjs/stylelint-module',
    "@nuxtjs/style-resources",
    '@nuxtjs/svg-sprite'
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
    scss: [
      "./assets/scss/*.scss",
      "./components/**/*.scss",
      "./layouts/**/*.scss",
      "./pages/**/*.scss",
    ]
  },
  apollo: {
    clientConfigs: {
      default: {
        httpEndpoint: 'http://localhost:1337/graphql',
      }
    }
  },
  svgSprite: {
    input: '~/assets/svg/'
  }
}
