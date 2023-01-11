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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:"order_id")->references(column:"id")->on("orders");
            $table->decimal(column:'amount', total:8, places:2);
            $table->string(column:'status', length:45);
            $table->string(column:'type', length:45);
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
        Schema::dropIfExists('payments');
    }
};
