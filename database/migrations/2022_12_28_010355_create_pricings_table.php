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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("book_id")->references("id")->on('book');
            $table->string("type")->comment("價格項目的類型（比如電子書版本、實體書版本）");
            $table->unsignedDecimal("price")->comment("這個類型書本的價格");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricings');
    }
};
