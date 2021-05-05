<template>
	<header class="header container">
		<HeaderLogo />
		<HeaderMenu />

	</header>
</template>

<script>
	import HeaderLogo from './HeaderLogo'
	import HeaderMenu from './HeaderMenu';

  export default {
		name: 'Header',
		components: {
			HeaderLogo,
			HeaderMenu
		},
		props: {},
		data() {
			return {

      }
		},
		computed: {},
		mounted() {

		},
		methods: {},

	}
</script>

<style lang="scss" src="./header.scss"></style>
