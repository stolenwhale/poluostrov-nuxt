<template>
  <div class="layout">
    <Header/>
    <Nuxt/>
    <Footer />
  </div>
</template>

<script>
  import Header from '../components/header/Header';
  import Footer from "../components/footer/Footer";

  export default {
    name: 'Layout',
    components: {
      Header,
      Footer
    },
    props: {},
    data () {
      return {}
    },
    computed: {},
    mounted () {
    },
    methods: {}
  }
</script>

