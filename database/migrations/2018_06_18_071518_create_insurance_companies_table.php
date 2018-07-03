<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('insurance_companies')) /** if table chaina bhane create garnenatra create hunna*/
        {

         Schema::create('insurance_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('ictype');
            $table->string('icname',100);
            $table->string('icaddress',100);
            $table->string('iclogo',100);
            $table->string('icphone',20);
            $table->string('icfax',30);
            $table->string('icurl',30);
            $table->string('icemail',30);
            $table->boolean('icstatus');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_companies');
    }
}
