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
        Schema::create('book_pictures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("book_id")->references("id")->on("books");
            $table->string("src")->comment("圖片連結");
            $table->string("alt")->comment("圖片替代文字");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_pictures');
    }
};
