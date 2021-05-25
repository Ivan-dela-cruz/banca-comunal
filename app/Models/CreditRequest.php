<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditRequest extends Model
{
    use HasFactory;

    protected $table = 'credit_requests';
    protected $fillable = [
        //step1
        'code',
        'member_id',
        'credit_type',
        'name_debtor',
        'dni_debtor',
        'amount',
        'reason_invest',
        'pay',
        'deadline',
        'variable_fee',
        'credit_segment',
        //step2
        //step3
        //step4
        'business_name',
        'ruc',
        'business_age',
        'sales_place',
        'local_type',
        'business_time',
        'business_address',
        'streets',
        'number',
        'business_reference',

        //step5
        //step6 as => Assets, pa => Passives, in => INCOME, ex => EXPENSES
        'accounts_receivable_as',
        'merchandise_as',
        'investment_crops_as',
        'furniture_appliances_as',//muebles y electrodomesticos
        'tools_machines_as',
        'land_as',//terrenos
        'houses_buildings_as',
        'other_goods_as',
        'total_as',

        'bank_debts_pa',
        'debts_suppliers_pa',
        'debts_warehouses_pa',//deudas con almacenes
        'total_debts_pa',
        'patrimony_pa',
        'total_pa',

        'partner_salary_in',
        'spouse_salary_in',
        'profit_trade_in',//ganancia por el comercio
        'leases_received_in',//arriendos recibidos
        'rent_car_in',
        'land_in',
        'other_income_in',
        'total_in',

        'feeding_ex',
        'health_ex',
        'basic_services_ex',
        'education_ex',
        'transport_ex',
        'leases_ex',
        'other_expenses_ex',
        'total_ex',

        //step 7
        'living_place_lat',
        'living_place_lng',
        'url_living',
        'commerce_lat',
        'commerce_lng',
        'url_commerce',
    ];

}
