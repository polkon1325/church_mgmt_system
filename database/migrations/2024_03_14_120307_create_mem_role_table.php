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
        Schema::create('mem_role_table', function (Blueprint $table) {
            $table->id("mem_role_id");
            $table->foreignId("mem_id")->constrained('members_table', 'mem_id')->indexName('mem_id');
            $table->foreignId("role_id")->constrained('roles_table', 'role_id')->indexName('role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mem_role_table');
    }
};
