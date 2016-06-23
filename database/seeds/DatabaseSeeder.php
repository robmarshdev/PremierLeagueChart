<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Robert Marsh',
            'email' => 'rob.dmind@gmail.com',
            'password' => bcrypt('7p!RlKGpdGMg'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'name' => 'Emelie Yates',
            'email' => 'emelieyates@hotmail.co.uk',
            'password' => bcrypt('7p!RlKGpdGMg'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('scores')->insert([
            'home' => 'arsenal',
            'away' => 'bournemouth',
            'em_pred' => '2-0',
            'rob_pred' => '1-5',
            'score' => '2-0'
        ]);
        DB::table('scores')->insert([
            'home' => 'arsenal',
            'away' => 'burnley',
            'em_pred' => '0-2',
            'rob_pred' => '4-2',
            'score' => '1-0'
        ]);
        DB::table('scores')->insert([
            'home' => 'arsenal',
            'away' => 'chelsea',
            'em_pred' => '2-0',
            'rob_pred' => '1-5',
            'score' => '2-0'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
