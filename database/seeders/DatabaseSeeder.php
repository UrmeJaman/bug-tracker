<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

          $this->command->info('User table seeded!');
    }
}
class UserTableSeeder extends Seeder {

    public function run()
    {
       DB::table('users')->insert([
            'username' => ('admin'),
            'fullname' => ('URME jaman'),
            'email' => ('urmejaman@gmail.com'),
            'designation' => ('admin'),
            'password' => bcrypt('12345678'),
            'status' => ('true')
          ]);
    }

}
?>