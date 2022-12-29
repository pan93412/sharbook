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
        Schema::table("books", function (Blueprint $table) {
            $table->string("brief")->nullable()->comment("書本介紹辭");
            $table->string("alternative_name")->nullable()->comment("書本別名");
            $table->longText("description")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn("brief");
            $table->dropColumn("alternative_name");
            $table->dropColumn("description");
        });
    }
};
