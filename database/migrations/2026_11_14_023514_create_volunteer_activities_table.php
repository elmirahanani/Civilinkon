
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteer_activities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('report_id')
                ->nullable()
                ->constrained('reports')
                ->nullOnDelete();

            $table->string('title');
            $table->text('description');
            $table->string('category'); // clean_up, reuse, sorting
            $table->string('location');

            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');

            $table->unsignedInteger('capacity')->default(20);
            $table->unsignedInteger('joined_count')->default(0);

            $table->string('status')->default('published');
            // draft, published, completed, cancelled

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteer_activities');
    }
};
