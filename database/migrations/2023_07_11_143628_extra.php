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


        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->unsignedInteger('sector_id');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();
        });


        Schema::create('measurement_unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
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
