
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteer_registrations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('volunteer_activity_id')
                ->constrained('volunteer_activities')
                ->cascadeOnDelete();

            $table->string('full_name', 150);
            $table->string('email');
            $table->string('phone', 25);
            $table->text('motivation');

            $table->string('status')->default('registered');

            $table->timestamps();

            // Satu email hanya boleh mendaftar sekali
            // untuk kegiatan yang sama.
            $table->unique(
                ['volunteer_activity_id', 'email'],
                'unique_volunteer_registration'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteer_registrations');
    }
};
