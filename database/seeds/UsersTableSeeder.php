<?php

use App\User;
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
        $partner = factory(User::class)->create([
            'name' => 'Test User'
        ]);

        ProtocolFactory::createForPartner($partner, ['protocol_id' => 'TEST']);
    }
}
