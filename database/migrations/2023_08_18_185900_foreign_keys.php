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

        Schema::table('investment_commissions', function (Blueprint $table)
        {
            $table->foreign('registered_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('statusChangedBy')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('region')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('added_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('statusChangedBy')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('investment_commission_id')->references('id')->on('investment_commissions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('stakeholder_assigned_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('user_image', function (Blueprint $table) {
            $table->foreign('approved_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });


        Schema::table('permissions', function (Blueprint $table)
        {
            $table->foreign('group_id')->references('id')->on('permission_group')->onDelete('cascade');
        });

        Schema::table('roles', function (Blueprint $table)
        {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('role_permissions', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('user_role', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('user_permissions', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('sidebar_menu_item', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('sidebar_menu')->onDelete('cascade');
        });



        Schema::table('investors', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('stakeholders', function (Blueprint $table) {
            $table->foreign('main_id')->references('id')->on('main_stakeholders')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('region', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('zone', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('region')->onDelete('cascade');
        });

        Schema::table('woreda', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('zone_id')->references('id')->on('zone')->onDelete('cascade');
        });



        Schema::table('items', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sector_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('measurement_unit', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('investment_information', function (Blueprint $table) {
            $table->foreign('sector_id')->references('id')->on('investment_sector')->onDelete('cascade');
            $table->foreign('registered_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::table('action_taken', function (Blueprint $table) {
            $table->foreign('investment_information_id')->references('id')->on('investment_information')->onDelete('cascade');
            $table->foreign('taken_by')->references('id')->on('users')->onDelete('cascade');
        });



        Schema::table('payment_cases', function (Blueprint $table) {
            $table->foreign('amount_set_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('payment', function (Blueprint $table) {
            $table->foreign('case_id')->references('id')->on('payment_cases')->onDelete('cascade');
            $table->foreign('payer_id')->references('id')->on('investors')->onDelete('cascade');
            $table->foreign('payed_by')->references('id')->on('investors')->onDelete('cascade');
            $table->foreign('cashier_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
        });


        Schema::table('LR_industrial_park', function (Blueprint $table) {
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('woreda_id')->references('id')->on('woreda')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('statusChangedBy')->references('id')->on('users')->onDelete('cascade');
        });




        Schema::table('LR_investment_sector', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('LR_investment_sector')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('statusChangedBy')->references('id')->on('users')->onDelete('cascade');

        });


        Schema::table('LR_mou_template_section', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_mou_template_subsection', function (Blueprint $table) {
            $table->foreign('section_id')->references('id')->on('LR_mou_template_section')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_mou_template_subsubsection', function (Blueprint $table) {
            $table->foreign('subsection_id')->references('id')->on('LR_mou_template_subsection')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_moa_template_tags', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });







        Schema::table('LR_investments', function (Blueprint $table) {
            $table->foreign('activity_id')->references('id')->on('LR_investment_sector')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commission_id')->references('id')->on('investment_commissions')->onDelete('cascade');
            $table->foreign('bank_id')->references('id')->on('investment_commissions')->onDelete('cascade');

            $table->foreign('expert_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('summary_id')->references('id')->on('LR_project_summary')->onDelete('cascade');
            $table->foreign('team_leader_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('director_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commissioner_id')->references('id')->on('users')->onDelete('cascade');


            $table->foreign('mou_id')->references('id')->on('LR_mou')->onDelete('cascade');
            $table->foreign('slip_approved_by')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
            $table->foreign('license_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_changed_by')->references('id')->on('users')->onDelete('cascade');
        });



        Schema::table('LR_company_name', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_project_summary', function (Blueprint $table) {
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('prepared_by')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::table('LR_mou', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('government_ip_id')->references('id')->on('LR_industrial_park')->onDelete('cascade');

            $table->foreign('private_ip_id')->references('id')->on('LR_investments')->onDelete('cascade');

            $table->foreign('lessor_investment_id')->references('id')->on('LR_investments')->onDelete('cascade');

            $table->foreign('commissioner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lessor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ipdc_representative_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('private_ip_representative_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('board_representative_id')->references('id')->on('users')->onDelete('cascade');

        });



        Schema::table('LR_shareholders', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
        });


        Schema::table('LR_investement_documents', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
        });


        Schema::table('LR_investment_representative', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('representative_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('LR_amendement_request')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_investment_capital', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('LR_amendement_request')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::table('LR_capital_registration', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('shareholder_id')->references('id')->on('investors')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_investment_activity', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('LR_investment_sector')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('LR_amendement_request')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_impact_and_mitigation', function (Blueprint $table) {

            $table->foreign('activity_id')->references('id')->on('LR_investment_activity')->onDelete('cascade');

        });

        Schema::table('LR_investment_address', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('woreda_id')->references('id')->on('woreda')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('LR_amendement_request')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_annual_production', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('measurement_id')->references('id')->on('measurement_unit')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('LR_amendement_request')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_raw_materials', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('measurement_id')->references('id')->on('measurement_unit')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('LR_amendement_request')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('LR_investment_utility', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');

        });

        Schema::table('LR_investment_employee', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');

        });

        Schema::table('LR_amendement_request', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');

        });

        Schema::table('LR_amendement_sign', function (Blueprint $table) {

            $table->foreign('ammendment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('users')->onDelete('cascade');

        });










        Schema::table('letter_code', function (Blueprint $table)
        {
            $table->foreign('template_added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('template_updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('letter_code_cc', function (Blueprint $table)
        {
            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');

        });




        Schema::table('letters', function (Blueprint $table) {

            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('initialized_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stakeholder_reciever_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('investment_reciever_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('investor_reciever_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('archiever_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('viewed_by')->references('id')->on('users')->onDelete('cascade');
        });




        Schema::table('letter_copy', function (Blueprint $table) {
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');

        });





        Schema::table('vip_service_type', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('vip_service', function (Blueprint $table) {

            $table->foreign('service_type_id')->references('id')->on('vip_service_type')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('investors')->onDelete('cascade');
        });



        Schema::table('investment_visa', function (Blueprint $table) {

            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approve_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('letter_approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('investment_visa_renewal', function (Blueprint $table) {

            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approve_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('letter_approved_by')->references('id')->on('users')->onDelete('cascade');
        });



        Schema::table('work_visa', function (Blueprint $table) {

            $table->foreign('employee_id')->references('id')->on('LR_investment_employee')->onDelete('cascade');
            $table->foreign('requested_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approve_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('letter_approved_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('work_visa_renewal', function (Blueprint $table) {

            $table->foreign('employee_id')->references('id')->on('LR_investment_employee')->onDelete('cascade');
            $table->foreign('requested_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approve_commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('letter_approved_by')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::table('work_permit_request', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('LR_investments')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('LR_investment_employee')->onDelete('cascade');
            $table->foreign('pm_approved_by')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');

            $table->foreign('work_permit_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_changed_by')->references('id')->on('users')->onDelete('cascade');

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
