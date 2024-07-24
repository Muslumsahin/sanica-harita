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
        Schema::create('bayilers', function (Blueprint $table) {
            $table->id();
            $table->string('baglioldugubayi');
            $table->unsignedBigInteger('il_id');
            $table->string('firmaismi');
            $table->string('firmaadresi');
            $table->string('firmatelefon');
            $table->string('tabelaolcu');
            $table->text('not');
            $table->timestamps();

            $table->foreign('il_id')->references('id')->on('illers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayilers');
    }
};
