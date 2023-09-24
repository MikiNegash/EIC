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
        Schema::create('vip_service_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });

        Schema::create('vip_service', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_type_id');
            $table->unsignedInteger('investment_id');
            $table->unsignedInteger('investor_id');
            $table->date('landing_date');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('reviewed_by');
            $table->boolean('review_status');
            $table->unsignedInteger('approved_by');
            $table->boolean('approve_status');
            $table->boolean('approved_date');

            $table->timestamps();

        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
