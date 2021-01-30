import Vue from 'vue';
import vuetify from "../vuetify";

new Vue({
    vuetify,
    components: {
        app: require('../../components/App.vue').default,
        assets: require('../../components/dashboard/Assets.vue').default
    }
}).$mount('#app')
