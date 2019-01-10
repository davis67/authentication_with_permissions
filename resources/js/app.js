

require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";
import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component('slugWidget', require('./components/slugWidget.vue'));
//Vue.component('example-component', require('./components/ExampleComponent.vue'));
 
 // let app = new Vue({
 // 	el:'#app',
 // 	data:{}
 // });

 // $(document).ready(function(){
 // 	$('button.dropdown').hover(function(e){
 // 		$(this).toggleClass('is-open');
 // 	});
 // });

 require('./manage');