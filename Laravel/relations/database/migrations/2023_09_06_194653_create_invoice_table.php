<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->float('value')->default(0.0);
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('address_id')
                ->references('id')
                ->on('addresses');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
