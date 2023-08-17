<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初期ユーザー
        DB::table('users')->insert([
            [
                'username' => 'たなか',
                'mail' => 'ebimayo@gmail.com',
                'password' => bcrypt('tanaka1234')
            ],
        ]);
    }
}
