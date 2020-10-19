import  Vue from 'vue';
import Router from "vue-router"
Vue.use(Router)
import exampleComponent from "./components/ExampleComponent.vue"
const routes = [
    {
        path:'/example-component',
        component:exampleComponent
    }
]

export default new Router({
    mode:'history',
    routes
})