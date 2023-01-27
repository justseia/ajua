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
        Schema::create('zikrs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->text('body');
            $table->text('transcription');
            $table->text('translation');
            $table->string('audio');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zikrs');
    }
};
