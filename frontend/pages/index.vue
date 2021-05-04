<template>
  <div>
    {{ip}}
  </div>
</template>

<script>
  export default {
    name: 'Index',
    async asyncData({ $axios }) {
      const ip = await $axios.$get('/backend/wp-json/wp/v2/posts/1');
      return { ip }
    },
  }
</script>
