
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            // Informasi laporan
            $table->string('title');
            $table->string('category');
            $table->text('description');
            $table->string('location');

            // Tingkat urgensi
            $table->enum('urgency', ['low', 'medium', 'high'])
                ->default('medium');

            // Foto pendukung
            $table->string('photo')->nullable();

            // Kode pelacakan unik
            $table->string('tracking_code')->unique();

            // Status penanganan laporan
            $table->enum('status', [
                'submitted',
                'verified',
                'in_progress',
                'resolved',
                'rejected'
            ])->default('submitted');

            // Catatan admin
            $table->text('admin_notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
