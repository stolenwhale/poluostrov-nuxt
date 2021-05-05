<template>
	<header class="header">
    <div class="header__inner container">
      <nav class="header__menu">
        <div class="header__menu-item header__menu-logo">
          <img v-lazy-load alt="Полуостров" data-src="/images/layout/logo.svg">
        </div>
      </nav>
    </div>
	</header>
</template>

<script>
  export default {
		name: 'Header',
		components: {},
		props: {},
		data() {
			return {
			  locations: this.$store.locations
      }
		},
		computed: {},
		mounted() {

		},
		methods: {},

	}
</script>

<style lang="scss" src="./header.scss"></style>
