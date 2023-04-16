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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('document_type_id');
            $table->string('document', 30);
            $table->string('check_digit', 1)->nullable();
            $table->text('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('status')->default(1)->comment('Relación la tabla status con el campo id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
