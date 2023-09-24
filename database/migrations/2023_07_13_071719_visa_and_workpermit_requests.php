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

        Schema::create('investment_visa', function (Blueprint $table) {

            $table->increments('id');
            $table->string('process_type');   // new or conversion
            $table->unsignedInteger('investor_id');
            $table->text('reason');
            $table->boolean('is_company');
            $table->string('convert_from')->nullable();
            $table->string('bank_statement')->nullable();
            $table->string('business_license')->nullable();
            $table->string('moa')->nullable();


            $table->boolean('is_review_comment')->default(0);
            $table->string('review_comment')->nullable();
            $table->unsignedInteger('reviewed_by')->nullable();
            $table->unsignedInteger('review_commented_by')->nullable();

            $table->boolean('is_approve_comment')->default(0);
            $table->string('approve_comment')->nullable();
            $table->unsignedInteger('approved_by')->nullable();
            $table->unsignedInteger('approve_commented_by')->nullable();

            $table->unsignedInteger('letter_prepared_by')->nullable();
            $table->unsignedInteger('letter_id')->nullable();
            $table->unsignedInteger('letter_approved_by')->nullable();

            $table->string('visa_file')->nullable();
            $table->timestamps();

        });


        Schema::create('investment_visa_renewal', function (Blueprint $table) {

            $table->increments('id');
            $table->string('process_type');   // substitution or extension
            $table->unsignedInteger('investor_id');
            $table->text('reason');

            //$table->string('police_evidence');

            $table->boolean('is_review_comment')->default(0);
            $table->boolean('review_comment')->default(0);
            $table->unsignedInteger('reviewed_by')->nullable();
            $table->unsignedInteger('review_commented_by')->nullable();

            $table->boolean('is_approve_comment')->default(0);
            $table->boolean('approve_comment')->default(0);
            $table->unsignedInteger('approved_by')->nullable();
            $table->unsignedInteger('approve_commented_by')->nullable();

            $table->unsignedInteger('letter_prepared_by');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('letter_approved_by');

            $table->string('visa_file')->nullable();
            $table->timestamps();

        });




        Schema::create('work_visa', function (Blueprint $table) {

            $table->increments('id');
            $table->string('process_type');   // new or conversion
            $table->unsignedInteger('employee_id');
            $table->text('reason');
            $table->boolean('is_company');
            $table->string('convert_from')->nullable();
            $table->unsignedInteger('requested_by');


            $table->boolean('is_review_comment')->default(0);
            $table->string('review_comment')->nullable();
            $table->unsignedInteger('reviewed_by')->nullable();
            $table->unsignedInteger('review_commented_by')->nullable();

            $table->boolean('is_approve_comment')->default(0);
            $table->string('approve_comment')->nullable();
            $table->unsignedInteger('approved_by')->nullable();
            $table->unsignedInteger('approve_commented_by')->nullable();

            $table->unsignedInteger('letter_prepared_by')->nullable();
            $table->unsignedInteger('letter_id')->nullable();
            $table->unsignedInteger('letter_approved_by')->nullable();

            $table->string('visa_file')->nullable();
            $table->timestamps();

        });


        Schema::create('work_visa_renewal', function (Blueprint $table) {

            $table->increments('id');
            $table->string('process_type');   // substitution or extension
            $table->unsignedInteger('employee_id');
            $table->text('reason');
            $table->unsignedInteger('requested_by');
            //$table->string('police_evidence');

            $table->boolean('is_review_comment')->default(0);
            $table->boolean('review_comment')->default(0);
            $table->unsignedInteger('reviewed_by')->nullable();
            $table->unsignedInteger('review_commented_by')->nullable();

            $table->boolean('is_approve_comment')->default(0);
            $table->boolean('approve_comment')->default(0);
            $table->unsignedInteger('approved_by')->nullable();
            $table->unsignedInteger('approve_commented_by')->nullable();

            $table->unsignedInteger('letter_prepared_by');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('letter_approved_by');

            $table->string('visa_file')->nullable();
            $table->timestamps();

        });





        Schema::create('work_permit_request', function (Blueprint $table) {

            $table->increments('id');
            $table->string('process_type');   //new or extension or substitution
            $table->unsignedInteger('investment_id');
            $table->unsignedInteger('letter_id');
            $table->string('other_docs')->nullable();
            $table->unsignedInteger('employee_id');


            $table->unsignedInteger('pm_approved_by');
            $table->boolean('pm_review_status');
            $table->unsignedInteger('reviewed_by');
            $table->boolean('review_status');
            $table->unsignedInteger('approved_by');
            $table->boolean('approve_status');

            $table->string('comment');

            $table->unsignedInteger('payment_id');


            $table->string('work_permit_file')->nullable();
            $table->unsignedInteger('work_permit_prepared_by');
            $table->string('issued_date')->nullable();
            $table->string('expired_date')->nullable();
            $table->string('work_permit_code')->nullable();

            $table->string('work_permit_status')->default(1);
            $table->unsignedInteger('status_changed_by')->nullable();



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
