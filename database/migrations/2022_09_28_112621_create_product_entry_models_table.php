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
        Schema::create('product_entry_models', function (Blueprint $table) {
            $table->id();
            $table->string('category', '50');
            $table->string('pnameid', '50');
            $table->string('company', '50');
            $table->string('color', '50');
            $table->string('material', '50');
            $table->string('description', '50');
            $table->string('size', '50');
            // $table->string('image','50000');
            // $table->string('image1','50000');
            // $table->string('image2','50000');
            // $table->string('image3','50000');
            // $table->string('image4','50000');
            $table->text('image');
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
            $table->boolean('productstatus', '50')->default(1);
            $table->string('price', '100');
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
        Schema::dropIfExists('product_entry_models');
    }
};
