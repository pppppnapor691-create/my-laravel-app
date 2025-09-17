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
        Schema::table('cybersports', function (Blueprint $table) {
            $table->renameColumn('length_of_service(years)', 'length_of_service_years');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cybersports', function (Blueprint $table) {
            $table->renameColumn('length_of_service_years', 'length_of_service(years)');
        });
    }
};
