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
        Schema::create('investment_commissions', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('code');
            $table->unsignedInteger('registered_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedInteger('statusChangedBy')->nullable();
            $table->string('type');  // federal or regional
            $table->unsignedInteger('region_id')->nullable();
            $table->boolean('is_main')->default(0);
            $table->timestamps();
        });


        Schema::create('commission_licence_sector', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('investment_commission_id');
            $table->unsignedInteger('subsector_id');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });



        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('last_login')->nullable();
            $table->string('user_type')->default('investor'); // investor or user or admin or superadmin
            $table->string('signature')->nullable();  // file where the signature saved
            $table->boolean('status')->default(0);
            $table->unsignedInteger('investment_commission_id')->nullable();
            $table->unsignedInteger('stakeholder_id')->nullable(); // if it is representative of stakeholder
            $table->unsignedInteger('stakeholder_assigned_by')->nullable();
            $table->unsignedInteger('added_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('statusChangedBy')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });



        Schema::create('user_image', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('user_id');
            $table->string('approved_photo')->nullable();
            $table->string('uploaded_photo')->nullable();
            $table->unsignedInteger('approved_by')->nullable();
            $table->date('last_approve')->nullable();
            $table->string('comment');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('permission_group', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('group_name')->unique();
            $table->integer('order_num');
            $table->timestamps();
        });


        Schema::create('permissions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('label');
            $table->integer('order_num');
            $table->unsignedInteger('group_id');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });

        Schema::create('role_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });

        Schema::create('user_role', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });

        Schema::create('user_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('user_id');
            $table->boolean('status')->default(1); // for permission that allowed or disallowed
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });

        Schema::create('sidebar_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('user_type');    // for users or investor
            $table->string('icon');
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('sidebar_menu_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('menu_id');
            $table->unsignedInteger('permission_id')->nullable();
            $table->string('link');
            $table->string('item_code');
            $table->timestamps();
        });



        Schema::create('investors', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('user_id');
            $table->string('phone');
            $table->string('country');
            $table->string('country_type');
            $table->string('photo');
            $table->string('id_card')->nullable();
            $table->string('passport')->nullable();
            $table->string('business_license')->nullable();
            $table->string('moa')->nullable();
            $table->string('bank_statement')->nullable();
            $table->timestamps();
        });




        Schema::create('main_stakeholders', function (Blueprint $table)
        {
            $table->increments("id");
            $table->string('name');
            $table->string('code');
            $table->timestamps();
        });


        Schema::create('stakeholders', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('main_id');
            $table->string('name')->unique();
            $table->unsignedInteger('address_id');
            $table->string('code');
            $table->string('api_link')->nullable();
            $table->string('api_token')->nullable();
            $table->string('key')->nullable();
            $table->string('data_format')->nullable();
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });



        Schema::create('notification', function (Blueprint $table) {
            $table->increments("id");
            $table->string('message',1000);
            $table->boolean('is_seen')->default(0);
            $table->unsignedInteger('user_reciever_id')->nullable();
            $table->unsignedInteger('user_sender_id')->nullable();
            $table->unsignedInteger('investment_reciever_id')->nullable();
            $table->unsignedInteger('investment_sender_id')->nullable();
            $table->unsignedInteger('stakeholder_reciever_id')->nullable();
            $table->unsignedInteger('stakeholder_sender_id')->nullable();
            $table->timestamps();
        });






    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
