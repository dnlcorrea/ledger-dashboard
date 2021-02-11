<template>
    <v-card flat :loading="loading">
        <v-card-title style="justify-content: center">{{ title }}</v-card-title>

        <v-card-text>
            <table style="width:100%">
                <tr v-for="(value,asset,i) in assets" :key="i">
                    <td style="text-align: right">{{ asset }}</td>
                    <td>{{ value }}</td>
                </tr>
            </table>
        </v-card-text>

    </v-card>
</template>

<script>
export default {
    props: ['title', ''],

    data: _ => ({
        assets: [],
        loading: true
    }),

    mounted() {
        Echo.channel('assets')
            .listen('LedgerUpdated', e => {
                this.assets = e.assets;
                this.loading = false;
            });

        axios.get('/api/assets');
    }
}
</script>

<style scoped lang="scss">
table {
    tr {
        td {
            padding: 0 5px;
        }
    }
}

</style>
