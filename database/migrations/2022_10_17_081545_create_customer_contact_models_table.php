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
        Schema::create('customer_contact_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname','50');
            $table->string('emailid','50');
            $table->string('phoneno','10');
            $table->string('productname','50');
            $table->string('desc','5000');
            $table->string('customerid','5000');
            $table->string('reply','5000')->default(0);
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
        Schema::dropIfExists('customer_contact_models');
    }
};
