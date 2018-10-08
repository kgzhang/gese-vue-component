// imports
import Vue from 'vue'
import allComponents from './allComponents'
import Helpers from './imports/helpers'
// import store from './vuex/store'

window.helpers = new Helpers;

new Vue({
    el: '#app',
    // store,
    components: allComponents
})