<template>
<div>
    <Navbar />
    <slot />
    <Footer />
</div>
</template>

<script>
import Footer from '../components/Footer.vue'
import Navbar from '../components/Navbar.vue'
export default {
    components: {
        Footer,
        Navbar
    },

}
</script>

<style
Navbar>

</style>
