<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cybersports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('elo_cs')->default(1000);
            $table->integer('length_of_service_years')->default(1);
            $table->integer('worth_of_inventory')->default(0);
            $table->integer('count_of_socked_dicks')->default(100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down()
    {
        Schema::table('cybersports', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }

};
