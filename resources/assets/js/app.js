
require('./bootstrap');

import Vue from 'vue';
window.Vue = Vue;


Vue.component('auth-login', require('./components/Auth/Login.vue'));

const app = new Vue({
	el: '#app',
	data: {
		apiPrefix: 'api/v1/',
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
