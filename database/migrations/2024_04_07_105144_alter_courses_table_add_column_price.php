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
        // adicona tabel price em course
        Schema::table('courses', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->default(0)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // apagar coluna price
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        
        
    }
};