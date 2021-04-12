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

        $this->cleanDatabase();

        $this->call([
            RoleTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }


    private function cleanDatabase()
    {


    }
}
