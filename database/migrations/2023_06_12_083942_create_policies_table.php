<?php

use App\Models\Policy;
use App\Models\Group;
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
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        /**
         * Required for many-to-many relationship mapping
         * https://laravel.com/docs/10.x/eloquent-relationships#many-to-many 
         */
        Schema::create('group_policy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Group::class);
            $table->foreignIdFor(Policy::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policies');
        Schema::dropIfExists('group_policy');
    }
};
