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
        Schema::create('investment_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->text('brief_profile');
            $table->unsignedInteger('sector_id');
            $table->string('inquires_or_request');   //  inquires or request
            $table->string('website')->nullable();
            $table->string('country');
            $table->string('contact_person');
            $table->string('position');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_address');
            $table->string('request_type'); // Investment Information or Investment Statistical Data or
                                            // Investment Match Making or Setting Up Investment or Other
            $table->string('purpose');
            $table->string('document')->nullable();     // required if request type investment statistical data
            $table->string('source'); // Inhouse Information or events or MoFa or Embassies or business assossiation or
                                      //  consultants or social or press media, other
            $table->string('next_step')->nullable();
            $table->string('status')->default("new");  // new or warm or converted  or dropped or final dropped
            $table->string('remark')->nullable();
            $table->string('register_type');  // self or promotion_expert
            $table->unsignedInteger('registered_by')->nullable();
            $table->string('email_confirmed_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });



        Schema::create('action_taken', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('investment_information_id');
            $table->unsignedInteger('taken_by');
            $table->string("action");
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
