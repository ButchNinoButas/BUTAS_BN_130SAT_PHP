<?php

use App\Models\Employer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
@@ -13,17 +14,19 @@
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('employer_id');
            $table->foreignIdFor(Employer::class);
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