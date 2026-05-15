<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            // Tambah kolom edisi_ke jika belum ada
            if (!Schema::hasColumn('buku', 'edisi_ke')) {
                $table->integer('edisi_ke')->nullable()->after('judul');
            }
            
            // Tambah kolom penerbit_id untuk relasi
            if (!Schema::hasColumn('buku', 'penerbit_id')) {
                $table->foreignId('penerbit_id')->nullable()->after('edisi_ke')->constrained('penerbits')->onDelete('cascade');
            }
            
            // Hapus kolom penerbit yang lama (jika ada dan bertipe string)
            if (Schema::hasColumn('buku', 'penerbit')) {
                $table->dropColumn('penerbit');
            }
        });
    }

    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            $table->dropColumn(['edisi_ke', 'penerbit_id']);
            $table->string('penerbit')->nullable();
        });
    }
};