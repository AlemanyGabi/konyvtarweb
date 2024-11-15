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
        Schema::create('foglalasoks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->integer('book_id');
            $table->date('borrow_date');
            $table->date('return_date');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foglalasoks');
    }
};
