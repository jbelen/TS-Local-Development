<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->string('post_code', 10)->nullable();
            $table->string('state', 20)->nullable();
            $table->string('country', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->dropColumn('post_code');
            $table->dropColumn('state');
            $table->dropColumn('country');
        });
    }
}
