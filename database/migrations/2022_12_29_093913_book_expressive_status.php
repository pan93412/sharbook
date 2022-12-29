<?php

use App\Enums\BookStatus as BookStatus;
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
            $table->enum("status", BookStatus::values())
                ->default(BookStatus::Unknown->value);
        });
        Schema::table("books", function (Blueprint $table) {
            $table->dropColumn("is_used");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("books", function (Blueprint $table) {
            $table->boolean("is_used")->default(false);
        });
        Schema::table("books", function (Blueprint $table) {
            $table->dropColumn("status");
        });
    }
};
