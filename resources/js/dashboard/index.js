import Vue from 'vue';
import vuetify from "../vuetify";

new Vue({
    vuetify,
    components: {
        app: require('../../components/App.vue').default,
        tabular: require('../../components/dashboard/Tabular.vue').default
    }
}).$mount('#app')
