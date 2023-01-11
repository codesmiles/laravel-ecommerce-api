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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string(column: "frist_name");
            $table->string(column: "last_name");
            $table->string(column: "phone");
            $table->string(column: "address1", length:255);
            $table->string(column: "address2", length:255);
            $table->string(column: "city", length:255);
            $table->string(column: "state", length:255);
            $table->string(column: "zipcode", length:255);
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
        Schema::dropIfExists('order_details');
    }
};
