<template>
<div class="app">
    <component :is="layout">
        <router-view></router-view>
    </component>
</div>
</template>

<script>
export default {
    computed: {
        layout() {
            if (this.$route.meta.layout !== undefined) {
                return this.$route.meta.layout + '-layout';
            }
        }
    },
}
</script>

<style>

</style>
