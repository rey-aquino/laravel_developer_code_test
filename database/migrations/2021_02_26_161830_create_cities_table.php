<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('state_id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('cities')->insert(
            array(
                ['state_id' => 1, 'name' => 'Bengaluru'],
                ['state_id' => 1, 'name' => 'Mangalore'],
                ['state_id' => 1, 'name' => 'Belgaum'],
                ['state_id' => 1, 'name' => 'Hubli'],
                ['state_id' => 1, 'name' => 'Shivamogga'],

                ['state_id' => 1, 'name' => 'Vijayapura'],
                ['state_id' => 1, 'name' => 'Gulbarga'],
                ['state_id' => 1, 'name' => 'Mysuru'],
                ['state_id' => 1, 'name' => 'Davanagere'],
                ['state_id' => 1, 'name' => 'Tumakuru'],

                ['state_id' => 2, 'name' => 'Mumbai'],
                ['state_id' => 2, 'name' => 'Pune'],
                ['state_id' => 2, 'name' => 'Nagpur'],
                ['state_id' => 2, 'name' => 'Aurangabad'],
                ['state_id' => 2, 'name' => 'Nashik'],

                ['state_id' => 2, 'name' => 'Navi Mumbai'],
                ['state_id' => 2, 'name' => 'Solapur'],
                ['state_id' => 2, 'name' => 'Amravati'],
                ['state_id' => 2, 'name' => 'Kolhapur'],
                ['state_id' => 2, 'name' => 'Akola'],

                ['state_id' => 3, 'name' => 'Chennai'],
                ['state_id' => 3, 'name' => 'Coimbatore'],
                ['state_id' => 3, 'name' => 'Madurai'],
                ['state_id' => 3, 'name' => 'Salem'],
                ['state_id' => 3, 'name' => 'Tiruchirappalli'],

                ['state_id' => 3, 'name' => 'Vellore'],
                ['state_id' => 3, 'name' => 'Tiruppur'],
                ['state_id' => 3, 'name' => 'Erode'],
                ['state_id' => 3, 'name' => 'Thanjavur'],
                ['state_id' => 3, 'name' => 'Tirunelveli'],

                ['state_id' => 4, 'name' => 'Thiruvananthapuram'],
                ['state_id' => 4, 'name' => 'Kochi'],
                ['state_id' => 4, 'name' => 'Kozhikode'],
                ['state_id' => 4, 'name' => 'Thrissur'],
                ['state_id' => 4, 'name' => 'Kollam'],

                ['state_id' => 4, 'name' => 'Alappuzha'],
                ['state_id' => 4, 'name' => 'Kannur'],
                ['state_id' => 4, 'name' => 'Kottayam'],
                ['state_id' => 4, 'name' => 'Palakkad'],
                ['state_id' => 4, 'name' => 'Vayala'],

                ['state_id' => 5, 'name' => 'Amritsar'],
                ['state_id' => 5, 'name' => 'Jalandhar'],
                ['state_id' => 5, 'name' => 'Ludhiana'],
                ['state_id' => 5, 'name' => 'Patiala'],
                ['state_id' => 5, 'name' => 'Chandigarh'],

                ['state_id' => 5, 'name' => 'Sahibzada Ajit Singh Nagar'],
                ['state_id' => 5, 'name' => 'Lahore'],
                ['state_id' => 5, 'name' => 'Bathinda'],
                ['state_id' => 5, 'name' => 'Hoshiarpur'],
                ['state_id' => 5, 'name' => 'Pathankot'],
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
        Schema::dropIfExists('cities');
    }
}
