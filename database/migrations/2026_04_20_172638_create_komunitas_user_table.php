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
       Schema::create('komunitas_user', function (Blueprint $table) {
    $table->id();
    $table->integer('user_id');
    $table->integer('komunitas_id');
    $table->timestamps();
});
    }
};
