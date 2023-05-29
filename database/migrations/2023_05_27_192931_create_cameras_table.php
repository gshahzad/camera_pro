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
        Schema::create('cameras', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('camera_embed_code')->nullable();
			$table->string('camera_longitude')->nullable();
			$table->string('camera_latitude')->nullable();
			$table->string('full_name')->nullable();
			$table->string('email_address')->nullable();
			$table->string('contact_no')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('post_code')->nullable();
			$table->string('country')->nullable();
			
			$table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cameras');
    }
};
