<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run() {
		DB::table('users')->insert([
			'name' => 'pawel',
			'email' => 'p.schwalkowski@gmail.com',
			'password' => bcrypt('password'),
		]);

		factory(App\Models\User::class, 19)->create();
	}
}
