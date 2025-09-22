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
    Schema::create('stories', function (Blueprint $table) {
        $table->id(); // ID unik untuk setiap cerita
        $table->string('title'); // Judul cerita
        $table->string('author'); // Nama penulis
        $table->text('content'); // Isi cerita (bisa panjang)
        $table->string('image_path')->nullable(); // Path/link ke gambar (boleh kosong)
        $table->timestamps(); // Otomatis membuat kolom created_at & updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
