<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
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
            $table->string(column:'first_name',length:45);
            $table->string(column:'last_name',length:45);
            $table->string(column:'phone',length:45);
            $table->string(column:'status',length:45);
            $table->timestamps();
            $table->foreignIdFor(model: User::class, column: "created_by")->nullable();
            $table->foreignIdFor(model: User::class, column: "updated_by")->nullable();
        });
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
};
