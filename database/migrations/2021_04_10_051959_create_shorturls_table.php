<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShorturlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shorturls', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')->nullable()->constrained();
            $table->string('Title')->nullable();
            $table->text('original_url');
            $table->string('short_url')->nullable();
            $table->string('visits')->default(0);
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
        Schema::dropIfExists('shorturls');
    }
}
