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
        Schema::create('bookContacts', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',40);
            $table->string('lasName',40);
            $table->string('address',255);
            $table->string('telephone',40);
            $table->string('email',255);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookContacts');
    }
};
