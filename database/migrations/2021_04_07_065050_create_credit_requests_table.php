<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            //step 1
            $table->enum('credit_type', ['Nuevo', 'Refinanciación']);
            $table->string('name_debtor')->nullable();
            $table->string('dni_debtor')->nullable();
            $table->string('amount')->nullable();
            $table->string('reason_invest')->nullable();
            $table->string('pay')->nullable();
            $table->string('deadline')->nullable();
            $table->boolean('variable_fee')->nullable();
            $table->enum('credit_segment', ['Microcrédito', 'Consumo', 'Inversión', 'Vivienda']);

            //step2
            //step3

            //step4
            $table->string('business_name')->nullable();
            $table->string('ruc')->nullable();
            $table->string('business_age')->nullable();
            $table->enum('sales_place', ['Local', 'Ambulante']);
            $table->enum('local_type', ['Propio', 'Arriendo', 'Familiares', 'Otro']);
            $table->string('business_time')->nullable();
            $table->string('business_address')->nullable();
            $table->string('streets')->nullable();
            $table->string('number')->nullable();
            $table->string('business_reference')->nullable();

            //step5
            //step6 as => Assets, pa => Passives, in => INCOME, ex => EXPENSES
            $table->string('accounts_receivable_as')->nullable();
            $table->string('merchandise_as')->nullable();
            $table->string('investment_crops_as')->nullable();
            $table->string('furniture_appliances_as')->nullable();//muebles y electrodomesticos
            $table->string('tools_machines_as')->nullable();
            $table->string('land_as')->nullable();//terrenos
            $table->string('houses_buildings_as')->nullable();
            $table->string('other_goods_as')->nullable();
            $table->string('total_as')->nullable();

            $table->string('bank_debts_pa')->nullable();
            $table->string('debts_suppliers_pa')->nullable();
            $table->string('debts_warehouses_pa')->nullable();
            $table->string('total_debts_pa')->nullable();
            $table->string('patrimony_pa')->nullable();
            $table->string('total_pa')->nullable();

            $table->string('partner_salary_in')->nullable();
            $table->string('spouse_salary_in')->nullable();
            $table->string('profit_trade_in')->nullable();//ganancia por el comercio
            $table->string('leases_received_in')->nullable();//arriendos recibidos
            $table->string('rent_car_in')->nullable();
            $table->string('land_in')->nullable();
            $table->string('other_income_in')->nullable();
            $table->string('total_in')->nullable();

            $table->string('feeding_ex')->nullable();
            $table->string('health_ex')->nullable();
            $table->string('basic_services_ex')->nullable();
            $table->string('education_ex')->nullable();
            $table->string('transport_ex')->nullable();
            $table->string('leases_ex')->nullable();
            $table->string('other_expenses_ex')->nullable();
            $table->string('total_ex')->nullable();

            //step 7
            $table->string('living_place_lat')->nullable();
            $table->string('living_place_lng')->nullable();
            $table->string('commerce_lay')->nullable();
            $table->string('commerce_lng')->nullable();

            $table->timestamps();
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_requests');
    }
}
