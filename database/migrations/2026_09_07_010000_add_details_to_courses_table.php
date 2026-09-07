<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('availability_status')->default('disponible')->after('training_center_id');
            $table->string('duration')->default('Por definir')->after('availability_status');
            $table->text('description')->nullable()->after('duration');
            $table->text('subjects')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['availability_status', 'duration', 'description', 'subjects']);
        });
    }
};