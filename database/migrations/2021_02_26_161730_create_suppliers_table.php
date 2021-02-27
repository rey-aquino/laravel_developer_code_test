<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });

        DB::table('suppliers')->insert(
            array(
                ['name'         => 'Andy Young',
                 'address'      => 'East Ave. Aurora HG',
                 'phone_number' => '09666587458',
                 'email'        => 'andyyoung@gmail.com',
                 'city'         =>  4,
                 'state'        =>  4,
                 'country'      =>  1,
                ],

                ['name'         => 'Alex Man',
                'address'      => 'SLEX North America',
                'phone_number' => '09858745695',
                'email'        => 'alexman@gmail.com',
                'city'         =>  5,
                'state'        =>  5,
                'country'      =>  1,
               ],

               ['name'         => 'Senpai Kazu',
               'address'      => 'Little Cave Ave',
               'phone_number' => '09685874412',
               'email'        => 'senpai@gmail.com',
               'city'         =>  6,
               'state'        =>  6,
               'country'      =>  1,
              ],
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
        Schema::dropIfExists('suppliers');
    }
}
