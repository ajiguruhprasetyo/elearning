<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => Str::random(3),
            'email'     => Str::random(3).'@gmail.com',
            'password'  => bcrypt('testing '),
        ]);
    }
}
