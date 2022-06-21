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
        Schema::create('material_enters', function (Blueprint $table) {
            $table->id();
            $table->integer("po_number")->nullable()->default(NULL);
            $table->integer("order_number")->nullable()->default(NULL);
            $table->string("side_mark")->nullable()->default(NULL);
            $table->string("carrier")->nullable()->default(NULL);
            $table->integer("roll_number")->nullable()->default(NULL);
            $table->float("width")->nullable()->default(NULL);
            $table->float("length")->nullable()->default(NULL);
            $table->float("qnt_sqft")->nullable()->default(NULL);
            $table->string("material_type")->nullable()->default(NULL);
            $table->string("store")->nullable()->default(NULL);
            $table->string("Description")->nullable()->default(NULL);
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
        Schema::dropIfExists('material_enters');
    }
};
