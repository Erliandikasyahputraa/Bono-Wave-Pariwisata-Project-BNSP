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
    Schema::table('users', function (Blueprint $table) {
        // Tambahkan kolom 'role', dan set nilai default-nya 'user'
        $table->string('role')->default('user'); 
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        // Untuk membatalkan migrasi, hapus kolom 'role'
        $table->dropColumn('role');
    });
}
};
