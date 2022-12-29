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
            $table->string("name")->index()->change();
            $table->string("author")->index()->change();
            $table->string("publisher")->index()->change();
        });

        Schema::table("users", function (Blueprint $table) {
            $table->string("name")->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // FIXME: revert index
    }
};
