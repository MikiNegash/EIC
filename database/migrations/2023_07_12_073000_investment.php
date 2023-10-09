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

        Schema::create('LR_industrial_park', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->boolean('status')->default(1);
            $table->unsignedInteger('woreda_id');
            $table->unsignedInteger('stakeholder_id');
            $table->unsignedInteger('added_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('statusChangedBy')->nullable();
            $table->timestamps();
        });


        Schema::create('LR_investment_sector', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('type');  // sector or subsector or activity
            $table->unsignedInteger('parent_id')->nullable(); ///  self refrence
            $table->unsignedInteger('added_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('statusChangedBy')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('LR_mou_template', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type")->nullable();    // bipartite or tripartite or quadripartite
            $table->string("title");
            $table->string("parent_id")->nullable();
            $table->text("content");
            $table->integer("order_num");
            $table->unsignedInteger("added_by");
            $table->unsignedInteger("updated_by")->nullable();
        });


        Schema::create('LR_moa_template_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("tag");
            $table->boolean("type")->default(1);   // 0  for eic  company_name  sibling_name   ip_name
            $table->unsignedInteger("added_by");
            $table->unsignedInteger("updated_by")->nullable();
        });


        Schema::create('LR_investments', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string("investment_type");   // sole , PLC , branch

            $table->boolean("is_ip")->default(0);


            $table->string('company_name')->nullable();  // inserted when optional company name approved
            $table->string('trade_name')->nullable();
            $table->string('ownership');   // domestic  or foreigner  or Joint venture  or branch
            $table->unsignedInteger("activity_id");
            $table->integer('estimated_employee');
            $table->string('info_source');// Inhouse Information or events or MoFa or Embassies or business assossiation or
                                          //  consultants or social or press media, other
            $table->bigInteger('capital')->default(0);
            $table->unsignedInteger('created_by');
            $table->boolean('is_sent')->default(0);
            $table->string('managed_by');  // pm or attorney  for identifying who will manage the project

            $table->unsignedInteger("commission_id")->nullable();

            $table->unsignedInteger("bank_id")->nullable();

            $table->unsignedInteger("expert_id")->nullable();

            $table->string("expert_comment")->nullable();

            $table->unsignedInteger("summary_id")->nullable();

            $table->unsignedInteger("team_leader_id")->nullable();
            $table->string("team_leader_comment")->nullable();

            $table->unsignedInteger("director_id")->nullable();
            $table->string("director_comment")->nullable();

            $table->unsignedInteger("commissioner_id")->nullable();
            $table->string("commissioner_comment")->nullable();


            $table->unsignedInteger("mou_id")->nullable();
            $table->boolean("is_approved")->default(0);
            $table->date("mou_approved_date")->nullable();

            $table->string('bank_slip')->nullable();  // slip file
            $table->string('slip_id')->nullable();
            $table->string('is_slip_approved')->nullable();
            $table->unsignedInteger('slip_approved_by')->nullable();

            $table->unsignedInteger('payment_id')->nullable();

            $table->string('license_file')->nullable();

            $table->unsignedInteger('license_prepared_by')->nullable();

            $table->string('issued_date')->nullable();
            $table->string('expired_date')->nullable();
            $table->string('license_code')->nullable();

            $table->boolean('is_registered')->default(0);
            $table->boolean('is_closed')->default(0);

            $table->unsignedInteger('status_changed_by')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });




        Schema::create('LR_company_name', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('investment_id');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->unsignedInteger('approved_by')->nullable();
            $table->timestamps();
        });




        Schema::create('LR_project_summary', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string("project_name");
            $table->string("project_type");
            $table->string("typeof_business");
            $table->string("project_stablishiment",1000);
            $table->string("project_request_area");
            $table->string("location");
            $table->string("project_description");
            $table->string("project_cost_estimated");
            $table->string("date_of_commencement");
            $table->string("raw_material");
            $table->string("product");
            $table->string("project_goal",1000);
            $table->string("project_benefit",1000);
            $table->string("target_market");
            $table->float("electricity");  // in kwhr
            $table->float("water"); // in m3
            $table->float("feul");  // in kg
            $table->string("job_opportunity",1000);
            $table->string("skill_transfer",1000);
            $table->string("technology",1000);
            $table->string("benefit_for_country",1000);
            $table->unsignedInteger('prepared_by')->nullable();
            $table->unsignedInteger('commented_by')->nullable();
            $table->unsignedInteger('approved_by')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });




        Schema::create('LR_mou', function (Blueprint $table)
        {
            $table->increments('id');

            $table->unsignedInteger("created_by")->nullable();
            $table->string("creator_comment")->nullable();

            $table->string("type");  // ip_developer or  ip_enterprize
            $table->string("landtype");// developed or undeveloped


            $table->unsignedInteger("government_ip_id")->nullable(); // refers stakeholder with industrial_park as main_stake_holder
            $table->unsignedInteger("private_ip_id")->nullable();   //  refrers to  investment table
            $table->unsignedInteger("lessor_investment_id")->nullable();   // refrers to  investment table for an investment which is


            $table->unsignedInteger("commissioner_id")->nullable();
            $table->string("commissioner_comment")->nullable();
            $table->date("commissioner_approved_date")->nullable();

            $table->unsignedInteger("investor_id")->nullable();
            $table->string("investor_comment")->nullable();
            $table->date("investor_approved_date")->nullable();

            $table->unsignedInteger("lessor_id")->nullable();
            $table->string("lessor_comment")->nullable();
            $table->date("lessor_approved_date")->nullable();

            $table->unsignedInteger("ipdc_representative_id")->nullable();
            $table->string("ipdc_representative_comment")->nullable();
            $table->date("ipdc_approved_date")->nullable();

            $table->unsignedInteger("private_ip_representative_id")->nullable();
            $table->string("private_ip_representative_comment")->nullable();
            $table->date("private_ip_approved_date")->nullable();


            $table->unsignedInteger("board_representative_id")->nullable();
            $table->string("board_comment")->nullable();
            $table->date("board_approved_date")->nullable();
            $table->string("board_minute")->nullable();



            $table->string("mou_file")->nullable();

            $table->boolean("is_cancelled")->default(0);
            $table->string('remark')->nullable();
            /// mou cancellation process may be added here
            $table->timestamps();
        });



        Schema::create('LR_shareholders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("investor_id");
            $table->boolean("is_signed");
            $table->string("telephone1");
            $table->string("telephone2")->nullable();
            $table->integer("number_share");
            $table->timestamps();
        });




        Schema::create('LR_investement_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            /// for ip
            $table->string("proposal_file")->nullable(); // file
            $table->string("regional_support_letter")->nullable(); // file

            $table->string("bank_statement")->nullable();  // file
            $table->string("business_lisence")->nullable(); // file
            $table->string("moa")->nullable();  // file

            $table->string("certificate_of_incorporation")->nullable(); // file
            $table->string("minute_of_resolution")->nullable(); // file
            $table->string("power_of_attorney_minute")->nullable(); // file

            $table->timestamps();

        });





        Schema::create('LR_investment_representative', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("representative_id");
            $table->string("type"); // attorney or general_manager
            $table->boolean("status")->default(0);  //
            $table->unsignedInteger("request_id")->nullable();  // refers ammendment request
            $table->unsignedInteger("approved_by")->nullable();
            $table->timestamps();
        });

        Schema::create('LR_investment_capital', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->bigInteger('capital');
            $table->integer('one_share_value');
            $table->bigInteger('equity_percent');
            $table->bigInteger('loan_percent');
            $table->boolean("status")->default(0);  //  approved or not
            $table->unsignedInteger("request_id")->nullable();  // refers ammendment request
            $table->unsignedInteger("approved_by")->nullable();
            $table->timestamps();
        });

        Schema::create('LR_capital_registration', function (Blueprint $table)
        {
            $table->increments('id');

            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("shareholder_id")->nullable();

            $table->float('capital');

            $table->string("slip")->nullable();
            $table->string("invoice_code")->nullable();

            $table->boolean("status")->default(0);  //approved or not
            $table->unsignedInteger("approved_by")->nullable();

            $table->timestamps();
        });

        Schema::create('LR_investment_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("activity_id");
            $table->string("objectives");
            $table->boolean("status")->default(0);  // approved or not
            $table->unsignedInteger("request_id")->nullable();  // refers ammendment request
            $table->unsignedInteger("approved_by")->nullable();
            $table->timestamps();
        });

        Schema::create('LR_impact_and_mitigation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("activity_id");  // refres investment activity
            $table->text("impact");
            $table->text("mitigation");
            $table->timestamps();
        });

        Schema::create('LR_investment_address', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("woreda_id");
            $table->string("house_no");
            $table->string("p_o_box");
            $table->string("telephone");
            $table->string("fax_email");
            $table->string("address_type");  // office or location

            $table->boolean("status")->default(0);  // approved or not
            $table->unsignedInteger("request_id")->nullable();  // refers ammendment request
            $table->unsignedInteger("approved_by")->nullable();
            $table->timestamps();
        });

        Schema::create('LR_annual_production', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("item_id");
            $table->unsignedInteger("measurement_id");
            $table->integer("quantity");
            $table->integer("local_share");  // percent
            $table->integer("export_share"); // percent

            $table->boolean("status")->default(0); // approved or not
            $table->unsignedInteger("request_id")->nullable();  // refers ammendment request
            $table->unsignedInteger("approved_by")->nullable();

            $table->timestamps();
        });


        Schema::create('LR_raw_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("material_id");
            $table->unsignedInteger("measurement_id");
            $table->integer("quantity");
            $table->integer("local_share");
            $table->integer("export_share");

            $table->boolean("status")->default(0);  // approved or not
            $table->unsignedInteger("request_id")->nullable();  // refers ammendment request
            $table->unsignedInteger("approved_by")->nullable();

            $table->timestamps();
        });






        Schema::create('LR_investment_utility', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->float("electricity")->default(0.0); // in kilo watt per hour
            $table->float("water")->default(0.0);  //  in meter cube per month
            $table->float("land")->default(0.0);  //  in square meter per month
            $table->float("oil_and_lubricant")->default(0.0);  //  in kg per month
            $table->timestamps();
        });



// may be removed

        Schema::create('LR_investment_employee', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("name");
            $table->string("country");
            $table->string("country_type");  // local or foreign
            $table->string("phase");  //  implementation or operation
            $table->string("sub-phase")->nullable();  //constraction or machinery  only if phase is implementation phase
            $table->string("passport")->nullable();
            $table->string("id_card")->nullable();
            $table->string("work_visa")->nullable();
            $table->string("educational_document");
            $table->string("experience_document")->nullable();
            $table->string("photo");
            $table->string("contact_agreement");  // file
            $table->string("payroll");    // file
            $table->string("pension")->nullable();  // file after business license
            $table->float("salary");
            $table->string("position"); // general_manager  or expert
            $table->string("agreement_minute")->nullable();  // required if position is above normal employee
            $table->string("employeement_letter"); // file
            $table->timestamps();
        });

        Schema::create('LR_amendement_request', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("amendment_type");  //
            $table->string("created_by");
            $table->string("minute_file");
            $table->unsignedInteger("reviewed_by")->nullable();
            $table->unsignedInteger("commented_by")->nullable();
            $table->unsignedInteger("approved_by")->nullable();
            $table->string("comment",500)->nullable();
            $table->timestamps();
        });

        Schema::create('LR_amendement_sign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("ammendment_id");
            $table->unsignedInteger("investor_id");
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
