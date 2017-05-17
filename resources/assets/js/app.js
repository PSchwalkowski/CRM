
require('./bootstrap');

import Vue from 'vue';

window.Vue = Vue;

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

		this.initPlaceholderData();
	},
	methods: {
		initFoundation: () => {
			let dropdownMenu = $('[data-dropdown-menu]');
			let drilldown = $('[data-drilldown]');

			if (dropdownMenu.length)
				new Foundation.DropdownMenu(dropdownMenu);
			if (drilldown.length)
				new Foundation.Drilldown(drilldown);

		},

		toggleNavbar: function() {
			this.documentBody.toggleClass('navbar-open');
		},

		initPlaceholderData: function() {
			let avatar = localStorage.getItem('avatar');
			let userAvatar = $('#user-avatar');
			if (avatar) {
				userAvatar.append($('<img />').attr('src', avatar));
			} else {
				axios.get('https://randomuser.me/api/')
					.then(response => {
						if (response.status != 200)
							return;

						let newAvatar = response.data.results[0].picture.thumbnail;
						localStorage.setItem('avatar', newAvatar);

						userAvatar.append($('<img />').attr('src', newAvatar));
					});
			}


		}
	}
});
