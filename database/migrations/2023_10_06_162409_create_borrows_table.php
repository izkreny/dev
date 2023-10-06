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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            // constrained() => ON DELETE CONSTRAIND, ON DELETE CASCADE
            // $table->foreignId('id_member')->constrained('members');
            // $table->foreignId('id_book')->constrained('books');
            $table->unsignedBigInteger('id_member');
            $table->unsignedBigInteger('id_book');
            $table->date('borrow_start_date');
            // nullable() = data can be null aka empty
            $table->date('borrow_end_date')->nullable();
            $table->timestamps();

            $table->foreign('id_member')
                    ->references('id')
                    ->on('members')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
            $table->foreign('id_book')
                    ->references('id')
                    ->on('books')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
