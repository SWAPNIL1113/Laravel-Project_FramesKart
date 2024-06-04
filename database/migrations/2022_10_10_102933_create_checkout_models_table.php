<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_models', function (Blueprint $table) {
            $table->id();
            $table->string('custname','100');
            $table->string('address','100');
            $table->string('custemail','100');
            $table->string('mobileno','10');
            $table->string('pincode','6');
            $table->boolean('billno')->default(0);
            $table->string('custid','10');
            $table->string('shippingtype','50');
            $table->string('total','100');
            $table->string('orderdate','20');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout_models');
    }
};





           