<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('hotel_rooms', function (Blueprint $table) {
        $table->id();
        $table->string('room_number');
        $table->integer('floor');
        $table->boolean('is_available')->default(true);

        $table->unsignedBigInteger('room_type_id');
        $table->foreign('room_type_id')
              ->references('id')
              ->on('room_types')
              ->onDelete('cascade');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_rooms');
    }
};
