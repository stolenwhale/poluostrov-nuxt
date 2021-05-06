<template>
  <div class="layout">
    <Header/>
    <Nuxt/>
    <Footer />
  </div>
</template>

<script>
  import {gql} from "graphql-tag";
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
      if(this.locations && this.locations.length) {
        this.$store.dispatch("setLocations", this.locations);
      }
    },
    methods: {},
    apollo: {
      locations: gql`
          query {
            locations {
              id,
              name
            }
          }
        `,
    },
  }
</script>

