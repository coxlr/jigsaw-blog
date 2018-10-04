
window.Vue = require('vue');

Vue.component('timer', require('./components/Timer.vue'));


const app = new Vue({
  el: '#app',
  data (){
    return {
      test: 'Coming soon...',
    }}

});