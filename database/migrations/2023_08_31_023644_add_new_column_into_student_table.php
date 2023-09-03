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
        Schema::table('students', function (Blueprint $table) {
            $table->string('username',35);
            $table->string('password',35);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
