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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda', 20);
            $table->string('stazione_partenza', 30);
            $table->string('stazione_arrivo', 30);
            $table->time('ora_partenza');
            $table->time('ora_arrivo');
            $table->smallInteger('codice-treno');
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->tinyInteger('is_in_orario')->unsigned();
            $table->tinyInteger('is_cancellato')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
