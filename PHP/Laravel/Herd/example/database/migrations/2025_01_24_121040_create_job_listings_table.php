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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            // foreign id called employer_id. Внешний ключ может быть большим неподписанным числом, поэтому лучше выбирать этот тип
//            $table->unsignedBigInteger('employer_id');
            // Альтернативно можно указать сразу на модель следующим образом
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title');
            $table->string('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
