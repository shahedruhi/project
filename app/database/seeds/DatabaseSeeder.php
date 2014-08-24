<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();

		// $this->call('UserTableSeeder');
        $vader = DB::table('users')->insert([
            'email'      => 'shahedruhi@yahoo.com',
            'username'   => 'shahedruhi@yahoo.com',
            'password'   => Hash::make('laravel'),
            'password_temp'   => Hash::make('laravel'),
            'code'   => 'a-101',
            'user_type'   => 'admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'email'      => 'shahedruhi@gmail.com',
            'username'   => 'shahedruhi@gmail.com',
            'password'   => Hash::make('laravel'),
            'password_temp'   => Hash::make('laravel'),
            'code'   => 'a-102',
            'user_type'   => 'admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

	}

}
