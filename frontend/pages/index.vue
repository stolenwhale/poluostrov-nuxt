<template>
  <div>
  </div>
</template>

<script>
  import {gql} from 'graphql-tag';

  export default {
    name: 'Index',
    async asyncData({$axios}) {
      const ip = await $axios.$get('/backend/wp-json/wp/v2/posts/1');


      return {ip};
    },
    created() {

    },
    mounted() {
      // eslint-disable-next-line no-console
      console.log(this.$apollo)

    },
    apollo: {
      posts: {
        query: gql`
          query GetPostsEdges {
            posts {
              edges {
                node {
                  id
                  title
                  date
                }
              }
            }
          }
          `
      },
    }
  }
</script>
