<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExampleSourceTables extends Migration
{


    /**
     * Run the migrations. (Only used for testing purposes, not to be used in production!
     *                        This connection is a SQLite connection so it's just a local DB file meant
     *                        to represent the Research Data Warehouse (RDW)
     *
     * @return void
     */
    public function up()
    {

        if(App::environment() != 'testing') return;
        Schema::connection('db_fakes')->dropIfExists('example_labs_table');
        Schema::connection('db_fakes')->create('example_labs_table', function (Blueprint $table) {

            $table->integer('RESULT_ID');
            $table->string('PATIENT_ID');
            $table->string('PROTOCOL_ID');
            $table->dateTime('LAB_RESULT_TIMESTAMP');
            $table->string('LAB_TEST_CODE');
            $table->decimal('LAB_RESULT_VALUE', 22, 127)->nullable();
            $table->string('LAB_TEXT_RESULT')->nullable();
            $table->string('LAB_UNIT')->nullable();
            $table->string('LAB_NORMAL_RANGE')->nullable();
            $table->string('LAB_LOINC_CODE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(App::environment() != 'testing') return;
        Schema::connection('db_fakes')->dropIfExists('example_labs_table');
    }
}
