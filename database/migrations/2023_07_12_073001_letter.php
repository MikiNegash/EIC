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
        //LETTER_CODE
        Schema::create('letter_code', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('description');
            $table->text('template_subject')->nullable();
            $table->text('template_content')->nullable();
            $table->string('template_closure')->nullable();
            $table->unsignedInteger('template_added_by')->nullable();
            $table->unsignedInteger('template_updated_by')->nullable();
            $table->timestamps();
        });

        Schema::create('letter_code_cc', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('letter_code_id');
            $table->unsignedInteger('stakeholder_id')->nullable();
            $table->timestamps();
        });




        Schema::create('letters', function (Blueprint $table) {

            $table->increments('id');

            $table->string('letter_identifier')->unique();

            $table->unsignedInteger('letter_code_id');


            $table->unsignedInteger('stakeholder_reciever_id')->nullable();
            $table->unsignedInteger('investment_reciever_id')->nullable();
            $table->unsignedInteger('investor_reciever_id')->nullable();


            $table->boolean('is_prepared')->default(0);


            $table->unsignedInteger('initialized_by')->nullable();

            $table->unsignedInteger('prepared_by')->nullable();

            $table->unsignedInteger('updated_by')->nullable();

            $table->string('create_style')->nullable();

            $table->unsignedInteger('approved_by')->nullable();


            $table->string('sent_date')->nullable();
            $table->string('ref_no')->nullable();

            $table->text('subject')->nullable();
            $table->text('content')->nullable();
            $table->string('closure')->nullable();

            $table->boolean('status')->default(0);
            $table->unsignedInteger('archiever_id')->nullable();



            $table->boolean('view_status')->default(0);
            $table->string('comment')->nullable();
            $table->string('letter_path')->nullable();

            $table->unsignedInteger('viewed_by')->nullable();

            $table->timestamps();


        });

        Schema::create('letter_copy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('stakeholder_id')->nullable();
            $table->unsignedInteger('main_stakeholder_id')->nullable();
            $table->unsignedInteger('investment_id')->nullable();
            $table->unsignedInteger('investor_id')->nullable();
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
