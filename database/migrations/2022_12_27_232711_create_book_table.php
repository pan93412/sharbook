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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            // 書本上傳者。上傳者不一定是原作者，比如像是二手書的販賣者。
            $table->foreignId("user_id")->references("id")->on("users");
            $table->string("isbn")->nullable();
            $table->string("author")->nullable();
            $table->string("publisher")->nullable();
            $table->date("published_at")->nullable();
            $table->string("language")->nullable();
            $table->boolean("is_used")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
