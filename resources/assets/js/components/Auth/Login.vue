<template>
	<div class="row">
		<div class="column small-centered small-4">
			<form v-on:submit="formSubmit">
				<div class="callout primary" style="display: none;"></div>
				<div class="row">
					<div class="column">
						<label for="email">Email
							<input type="text" name="email" id="email">
						</label>
					</div>
					<div class="column">
						<label for="password">Password
							<input type="password" name="password" id="password">
						</label>
					</div>
					<hr>
					<div class="column">
						<button type="submit" class="button">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
  export default {
    methods: {
			// TODO: on form change animate

      formSubmit: function(event) {
				event.preventDefault();
				let callout = $('.callout', event.target);
				callout.empty().slideUp();

				axios.post(this.$parent.apiPrefix + 'auth/login', {
					email: $('#email', event.target).val(),
					password: $('#password', event.target).val()
				})
				.then(response => {

				})
				.catch(error => {
					if (error.response.status == 409) {

						let errList = $('<ul />');

						$.each(error.response.data, function(i, error) {
							$.each(error, function(i, err) {
								errList.append($(`<li>${err}</li>`));
							});
						});
						callout.append(errList).slideDown();
					}
				});
			}
    }
  }
</script>
