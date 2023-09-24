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

        Schema::create('investment_sector', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('type');  // sector or subsector or activity
            $table->unsignedInteger('parent_id')->nullable(); ///  self refrence
            $table->unsignedInteger('added_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });


        Schema::create('payment_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('case_code');
            $table->string('case_name');
            $table->integer('amount_dollar');
            $table->integer('amount_birr');
            $table->unsignedInteger('amount_set_by');
            $table->timestamps();
        });

        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('case_id');
            $table->unsignedInteger('payer_id');
            $table->unsignedInteger('payed_by')->nullable();
            $table->unsignedInteger('investment_id')->nullable();
            $table->float('amount_birr');
            $table->float('amount_dollar');
            $table->unsignedInteger('cashier_id')->nullable();
            $table->string('api_id')->nullable();
            $table->string('api_transaction_id')->nullable();
            $table->date('issued_date')->nullable();
            $table->boolean('payment_status')->default(0);
            $table->string('payment_slip')->nullable();
            $table->string('processed_style')->nullable();                     // wether by manual or api
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
