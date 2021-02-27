<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
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

        DB::table('customers')->insert(
            array(
                ['name'         => 'John Doe',
                 'address'      => 'East Wood 30F',
                 'phone_number' => '09685625414',
                 'email'        => 'johndoe@gmail.com',
                 'city'         =>  1,
                 'state'        =>  1,
                 'country'      =>  1,
                ],

                ['name'         => 'Jane Doe',
                'address'      => 'Ximen Hub Sortation Center',
                'phone_number' => '09687458474',
                'email'        => 'janedoe@gmail.com',
                'city'         =>  2,
                'state'        =>  2,
                'country'      =>  1,
               ],

               ['name'         => 'Saitama',
               'address'      => 'Outer Space Village',
               'phone_number' => '09687478958',
               'email'        => 'saitama@gmail.com',
               'city'         =>  3,
               'state'        =>  3,
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
        Schema::dropIfExists('customers');
    }
}
