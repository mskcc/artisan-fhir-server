<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class SetupTestData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(App::environment() != 'local') return;

        DB::table('users')->insert(
            [  
                'id' => 999,
                'name' => 'Test User',
                'email' => 'testuser@email.com',
                'password' => bcrypt('secret'),
                'remember_token' => Str::random(10),
                'partner_id' => '28a79e56-f7fc-4a44-b251-9aaf440a7311',
                'api_token' => 'chwoRjx8EKB9HtAiTQrezcoOtQWV1RnynLaEoz9ACQPzX3snA3FUWP2OuG3N',
                'created_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('protocols')->insert(
            [  
                'id' => 999,
                'protocol_id' => 'TEST',
                'created_at' => \Carbon\Carbon::now()
            ]
        );

        DB::table('protocol_access')->insert(
            [  
                'user_id' => 999,
                'protocol_id' => 999
            ]
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(App::environment() != 'local') return;
        DB::table('protocol_access')
            ->where([
                ['user_id', '=', 999],
                ['protocol_id', '=', 999]
            ])->delete();
        DB::table('users')->where('email', '=', 'testuser@email.com')->delete();
        DB::table('protocols')->where('irb_no', '=', 'TEST')->delete();
    }
}
