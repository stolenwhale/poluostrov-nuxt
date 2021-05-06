<template>
  <nav class="header-menu">
    <HeaderMenuItem v-for="menuItem in menu" :key="menuItem.text" :menu-item="menuItem"/>
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
    async asyncData() {

    },
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
            submenu: []
          },
          {
            text: 'Дайджест',
            link: null,
          },
        ],
      }
    },
    computed: {},
    mounted() {
      this.$nextTick(() => {
        this.locations = this.$store.getters.getLocations;
        if(this.locations && this.locations.length) {
          this.locations.forEach((item) => {
            this.menu[1].submenu.push({
              text: `${item.name}`,
              link: `/location/${item.id}`,
            });
          });
        }
      });
    },
    methods: {},
  }
</script>


