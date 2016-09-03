<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'first' => 'Bramble',
            'last' => 'Beard',
            'status' => 1,
            'email' => 'admin@domain.com',
            'password' => bcrypt('password'),
        ]);
    }
}
