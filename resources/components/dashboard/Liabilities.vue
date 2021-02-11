<template>

</template>

<script>
export default {
    data: _ => ({
        liabilities: [],
        loading: true
    }),

    mounted() {
        Echo.channel('assets')
            .listen('LedgerUpdated', e => {
                this.liabilities = e.liabilities;
                this.loading = false;
            });
    }
}
</script>

<style scoped>

</style>
