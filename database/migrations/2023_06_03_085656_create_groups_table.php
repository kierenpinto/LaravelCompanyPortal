<?php

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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            // $table->boolean('isSuperUser')->default(false);
        });

        Schema::table('users', function (Blueprint $table){
            $table->foreignIdFor(Group::class)->nullable();
            $table->enum("type", array("customer", "superuser"))->default("customer");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table){
            // $table->dropForeignIdFor(Group::class);
            $table->dropColumn("group_id");
            $table->dropColumn("type");
        });

        Schema::dropIfExists('groups');
    }
};
