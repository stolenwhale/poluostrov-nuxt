<template>
  <div>
    {{ip}}
  </div>
</template>

<script>

  export default {
    name: 'Index',
    async asyncData({$axios}) {
      const ip = await $axios.$get('/backend/wp-json/wp/v2/posts/1');

      const planets = await $axios.$get('/backend/api/', {
        data: `
        query MyQuery {
          menus {
            edges {
              node {
                id
              }
            }
          }
        } `
      });
      return {ip, planets};
    },
  }
</script>
