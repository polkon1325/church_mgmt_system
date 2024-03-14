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
        Schema::create('members_table', function (Blueprint $table) {
            $table->id("mem_id");
            $table->string("mem_first_name");
            $table->string("mem_last_name");
            $table->integer("mem_age");
            $table->string("mem_address");
            $table->string("mem_contact");
            $table->date("mem_phy_BD");
            $table->date("mem_sprt_BD");
            $table->foreignId("mstry_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_table');
    }
};
