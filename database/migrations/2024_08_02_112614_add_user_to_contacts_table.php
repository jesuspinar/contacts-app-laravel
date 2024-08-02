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
        Schema::table('contacts', function (Blueprint $table) {
            // Checks if the column does not exist before adding it
            if (!Schema::hasColumn('contacts', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }

            // Check if the foreign key does not exist before creating it
            if (!Schema::hasColumn('contacts', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Deletes the foreign key if it exists and then the column
            if (Schema::hasColumn('contacts', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
};
