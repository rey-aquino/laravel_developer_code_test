<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('country_id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('states')->insert(
            array(
                ['country_id' => 1, 'name' => 'Karnataka'],
                ['country_id' => 1, 'name' => 'Maharashtra'],
                ['country_id' => 1, 'name' => 'Tamil Nadu'],
                ['country_id' => 1, 'name' => 'Kerala'],
                ['country_id' => 1, 'name' => 'Punjab'],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
