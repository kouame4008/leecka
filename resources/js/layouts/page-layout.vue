<template>
<div>
    <Navbar-page />
    <slot />
    <Footer />
</div>
</template>

<script>
import Footer from '../components/Footer.vue'
import NavbarPage from '../components/navbar-page.vue'
export default {
    components: {
        Footer,
        NavbarPage
    },

}
</script>

<style
Navbar>

</style>
