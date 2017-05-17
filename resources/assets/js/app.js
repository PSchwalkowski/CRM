
require('./bootstrap');

window.Vue = require('vue');

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
	el: '#app',
	data: {
		documentBody: $('body')
	},
	mounted: function() {
		this.initFoundation();

		this.documentBody.addClass('navbar-open');
	},
	methods: {
		initFoundation: () => {
			new Foundation.DropdownMenu($('[data-dropdown-menu]'));
			new Foundation.Drilldown($('[data-drilldown]'));
		},
		toggleNavbar: function() {
			this.documentBody.toggleClass('navbar-open');
		}
	}
});
