<template>
  <nav class="header-menu">
      <HeaderMenuItem v-for="menuItem in menu" :key="menuItem.text" :menu-item="menuItem" />
  </nav>
</template>

<script>
  import HeaderMenuItem from './HeaderMenuItem';

  export default {
    name: 'HeaderMenu',
    components: {
      HeaderMenuItem
    },
    props: {},
    data() {
      return {
        locations: null,
        menu: [
          {
            text: 'Погрузиться',
            link: null,
            submenu: [
              {
                text: 'Туризм',
                link: '/',
                svgName: 'menu_tourism',
              },
              {
                text: 'Маст-гоу',
                link: '/',
                svgName: 'menu_mustgo',
              },
              {
                text: 'Есть и жить',
                link: '/',
                svgName: 'menu_eatlive',
              },
            ],
          },
          {
            text: 'Локации',
            link: null,
            submenu: [
              {
                text: '',
                link: '/',
              },
            ],
          },
        ],
      }
    },
    computed: {},
    mounted() {
      this.location = this.$store.locations;
    },
    methods: {},
  }
</script>
