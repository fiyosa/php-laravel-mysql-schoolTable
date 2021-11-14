<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{

		User::create([
			'name' => 'Admin',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('password'),
			'remember_token' => Str::random(10),
		]);
		
		Post::factory(30)->create();
		
	}
}
