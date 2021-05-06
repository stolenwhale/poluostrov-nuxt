<template>
	<header class="header container">
		<HeaderLogo />
		<HeaderMenu />
		<Socials />
	</header>
</template>

<script>
	import Socials from '../socials/Socials';
	import HeaderLogo from './HeaderLogo'
	import HeaderMenu from './menu/HeaderMenu';

  export default {
		name: 'Header',
		components: {
			HeaderLogo,
			HeaderMenu,
			Socials
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

