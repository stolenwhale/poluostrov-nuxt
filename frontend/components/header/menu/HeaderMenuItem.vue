<template>
  <div :class="{'header-menu__item--sub': menuItem.submenu}" class="header-menu__item">
    <a class="header-menu__item-link btn btn--underline-reverse" href="">{{menuItem.text}}</a>
    <template v-if="menuItem.submenu">
      <div class="header-menu__submenu">
        <a v-for="submenuItem in menuItem.submenu"
           :key="submenuItem.text"
           :class="{'header-menu__submenu-link--icon': submenuItem.svgName}"
           :href="submenuItem.link"
           class="header-menu__submenu-link"
        >
          <svg-icon v-if="submenuItem.svgName"
                    :name="submenuItem.svgName"
                    class="header-menu__submenu-icon" />
          {{submenuItem.text}}
        </a>
      </div>
    </template>
  </div>
</template>

<script>
  export default {
    name: 'HeaderMenuItem',
    components: {},
    props: {
      menuItem: [Array, Object],
    },
    data() {
      return {}
    },
    computed: {},
    mounted() {
    },
    methods: {},
  }
</script>
