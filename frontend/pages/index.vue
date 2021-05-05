<template>
  <div>
  </div>
</template>

<script>
  import { gql } from 'graphql-tag'

  export default {
    name: 'Index',
    components: {},
    async asyncData({ $axios }) {

    },
    created() {

    },
    mounted() {
      if(this.locations && this.locations.length) {
        this.$store.dispatch("setLocations", this.locations);
      }
    },
    apollo: {
      locations: gql`
          query {
            locations {
              name
            }
          }
        `,
    },
  }
</script>
