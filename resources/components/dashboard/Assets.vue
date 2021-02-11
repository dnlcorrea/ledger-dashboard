<template>
    <v-card>
        {{ assets }}
    </v-card>
</template>

<script>
export default {
    name: "Assets",
    data: _ => ({
        assets: []
    }),

    mounted() {
        console.log('Im not nuts');
        Echo.channel('assets')
        .listen('LedgerUpdated', e => {
            console.log(e);
            this.assets = e.assets;
        });

        setTimeout( () => {
            axios.get('/api/assets');
        }, 2000 );
    }
}
</script>

<style scoped>

</style>
