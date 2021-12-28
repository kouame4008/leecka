<template>
<vs-row>

</vs-row>
</template>

<script>
import Vue from 'vue';

export default {
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        open () {
            this.$vs.notify({title:'Default',text:'Lorem ipsum dolor sit amet, consectetur'})
        }
    }
    
}
</script>
