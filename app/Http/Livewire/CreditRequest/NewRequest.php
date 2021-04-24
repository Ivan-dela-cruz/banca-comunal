<?php

namespace App\Http\Livewire\CreditRequest;

use App\Models\CreditRequest;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\MemberReference;
use App\Models\ReferenceMember;
use Livewire\Component;

class NewRequest extends Component
{
    public $action_deal = 'POST';
    public  $action = 'POST';


    //step1
    public $request_id = null, $credit_type, $name_debtor, $dni_debtor, $amount, $reason_invest, $pay, $deadline, $variable_fee, $credit_segment;

    //step2
    public $member_id = null, $doc_type, $doc_number, $name, $last_name, $instruction, $birth_place, $country, $birth_date;
    public $marital_status, $gender, $email, $phone1, $phone2, $residence_address;
    public $member_type, $account_number, $status_member, $url_image;

    //step3
    public $detail_member_id = null, $name_spouse, $last_name_spouse, $dni_spouse, $phone1_spouse, $economic_activity, $contract_type;
    public $company_name, $company_address, $company_phone, $service_time, $profession_spouse, $actual_charge_spouse, $income_spouse;

    public $passport_spouse, $birth_date_spouse, $email_spouse, $phone2_spouse, $city, $canton, $parish, $principal_street;
    public $secondary_street, $reference_place;

    //step4
    public $business_name, $ruc, $business_age, $sales_place, $local_type, $business_time, $business_address, $streets, $number, $business_reference;

    //step5
    public $action_ref = 'POST', $data_Reference, $reference_id, $name_ref, $last_name_ref, $dni_ref, $age_ref, $relationship_ref;
    public $instruction_ref, $time_to_meet_ref, $phone_ref;

    //step6 as => Assets, pa => Passives, in => INCOME, ex => EXPENSES
    public $accounts_receivable_as, $merchandise_as, $investment_crops_as, $furniture_appliances_as;
    public $tools_machines_as, $land_as, $houses_buildings_as, $other_goods_as, $total_as;
    public $bank_debts_pa, $debts_suppliers_pa, $debts_warehouses_pa, $total_debts_pa, $patrimony_pa, $total_pa;
    public $partner_salary_in, $spouse_salary_in, $profit_trade_in, $leases_received_in, $rent_car_in, $land_in, $other_income_in, $total_in;
    public $feeding_ex, $health_ex, $basic_services_ex, $education_ex, $transport_ex, $leases_ex, $other_expenses_ex, $total_ex;

    //step 7
    public $living_place_lat, $living_place_lng, $commerce_lay, $commerce_lng;

//    public $action = 'POST';

    public function render()
    {
        $data_reference = MemberReference::where('member_id', $this->member_id)->where('status',1)->get();
        return view('livewire.credit-request.new-request', compact('data_reference'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function storeStep1()
    {
        $data = [
            'credit_type' => $this->credit_type,
            'name_debtor' => $this->name_debtor,
            'dni_debtor' => $this->dni_debtor,
            'amount' => $this->amount,
            'reason_invest' => $this->reason_invest,
            'pay' => $this->pay,
            'deadline' => $this->deadline,
            'variable_fee' => $this->variable_fee,
            'credit_segment' => $this->credit_segment,
        ];
//        if ($this->request_id = !null) {
        $credit = CreditRequest::find($this->request_id);
        if (isset($credit)) {
            $credit->update($data);
            $this->request_id = $credit->id;
            $this->alert('success', 'Información de crédito actualizada con exito');
        } else {
            $data_credit = CreditRequest::create($data);
            $this->request_id = $data_credit->id;
            $this->alert('success', 'Información de crédito registrada con exito.');
        }
//        }

    }

    public function storeStep2()
    {
        $data = [
            'doc_type' => $this->doc_type,
            'doc_number' => $this->doc_number,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'instruction' => $this->instruction,
            'birth_place' => $this->birth_place,
            'country' => $this->country,
            'birth_date' => $this->birth_date,
            'marital_status' => $this->marital_status,
            'gender' => $this->gender,
            'email' => $this->email,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'residence_address' => $this->residence_address,
        ];

        $member = Member::where('doc_number', $this->doc_number)->first();
        if (isset($member)) {
            $member->update($data);
            $this->member_id = $member->id;
            $this->alert('success', 'Información actualizada con exito');
        } else {
            $m = Member::create($data);
            $this->member_id = $m->id;
            $this->alert('success', 'Información básica registrada con exito');

        }
    }

    public function storeStep3()
    {
        $data = [
            'member_id' => $this->member_id,
            'name_spouse' => $this->name_spouse,
            'last_name_spouse' => $this->last_name_spouse,
            'dni_spouse' => $this->dni_spouse,
            'phone1_spouse' => $this->phone1_spouse,
            'economic_activity' => $this->economic_activity,
            'contract_type' => $this->contract_type,
            'company_name' => $this->company_name,
            'company_address' => $this->company_address,
            'company_phone' => $this->company_phone,
            'service_time' => $this->service_time,
            'profession_spouse' => $this->profession_spouse,
            'actual_charge_spouse' => $this->actual_charge_spouse,
            'income_spouse' => $this->income_spouse,
        ];
        if ($this->member_id = !null) {
            $detail = DetailMember::where('member_id', $this->member_id)->first();
            if (isset($detail)) {
                $detail->update($data);
                $this->detail_member_id = $detail->id;
                $this->alert('success', 'Información del cónyugue actualizada con exito');
            } else {
                $d = DetailMember::create($data);
                $this->detail_member_id = $d->id;
                $this->alert('success', 'Información del cónyugue registrada con exito');
            }
        } else {
            $this->alert('error', 'No se puede guardar la información');
        }

    }

    public function storeStep4()
    {

        $data = [
            'business_name' => $this->business_name,
            'ruc' => $this->ruc,
            'business_age' => $this->business_age,
            'sales_place' => $this->sales_place,
            'local_type' => $this->local_type,
            'business_time' => $this->business_time,
            'business_address' => $this->business_address,
            'streets' => $this->streets,
            'number' => $this->number,
            'business_reference' => $this->business_reference,
        ];
//        if ($this->request_id = !null) {
        $credit = CreditRequest::find($this->request_id);
        if (isset($credit)) {
            $credit->update($data);
            $this->request_id = $credit->id;
            $this->alert('success', 'Información de negocio actualizada con exito');
        } else {
            $c = CreditRequest::create($data);
            $this->request_id = $c->id;
            $this->alert('success', 'Información de negocio registrada con exito');
        }
//        }

    }

    #region step5
    public function storeReference()
    {
        $data = [
            'member_id' => $this->member_id,
            'name' => $this->name_ref,
            'last_name' => $this->last_name_ref,
            'dni' => $this->dni_ref,
            'age' => $this->age_ref,
            'relationship' => $this->relationship_ref,
            'instruction' => $this->instruction_ref,
            'time_to_meet' => $this->time_to_meet_ref,
            'phone' => $this->phone_ref,
        ];

        if ($this->member_id != null) {
            $reference = MemberReference::create($data);
            $this->reference_id = $reference->id;
            $this->alert('success', 'Referencia registrada con exito');
        } else {
            $this->alert('error', 'No se puede guardar la información');
        }
    }

    public function editReference($id)
    {
        $this->action_ref = 'PUT';

        $reference = MemberReference::find($id);
        $this->reference_id = $reference->id;
        $this->name_ref = $reference->name;
        $this->last_name_ref = $reference->last_name;
        $this->dni_ref = $reference->dni;
        $this->age_ref = $reference->age;
        $this->relationship_ref = $reference->relationship;
        $this->instruction_ref = $reference->instruction;
        $this->time_to_meet_ref = $reference->time_to_meet;
        $this->phone_ref = $reference->phone;
    }

    public function updateReference()
    {
        $reference = MemberReference::where('id', $this->reference_id);
        $data = [
            'name' => $this->name_ref,
            'last_name' => $this->last_name_ref,
            'dni' => $this->dni_ref,
            'relationship' => $this->relationship_ref,
            'instruction' => $this->instruction_ref,
            'time_to_meet' => $this->time_to_meet_ref,
        ];
        $reference->update($data);
        $this->alert('success', 'Referencia actualizada con exito.', ['showCancelButton' => false,]);
        $this->resetInputFieldsRef();
    }

    public function deleteReference($id)
    {
        MemberReference::find($id)->delete();
        $this->alert('success', 'Referencia eliminada con exito.', ['showCancelButton' => false,]);

    }

    public function resetInputFieldsRef()
    {
        $this->action_ref = 'POST';
        $this->reference_id = null;
        $this->name_ref = '';
        $this->last_name_ref = '';
        $this->dni_ref = '';
        $this->relationship_ref = '';
        $this->instruction_ref = '';
        $this->time_to_meet_ref = '';
    }

    #endregion

    public function storeStep6()
    {

        $data = [
            'accounts_receivable_as' => $this->accounts_receivable_as,
            'merchandise_as' => $this->merchandise_as,
            'investment_crops_as' => $this->investment_crops_as,
            'furniture_appliances_as' => $this->furniture_appliances_as,
            'tools_machines_as' => $this->tools_machines_as,
            'land_as' => $this->land_as,
            'houses_buildings_as' => $this->houses_buildings_as,
            'other_goods_as' => $this->other_goods_as,
            'total_as' => $this->total_as,

            'bank_debts_pa' => $this->bank_debts_pa,
            'debts_suppliers_pa' => $this->debts_suppliers_pa,
            'debts_warehouses_pa' => $this->debts_warehouses_pa,
            'total_debts_pa' => $this->total_debts_pa,
            'patrimony_pa' => $this->patrimony_pa,
            'total_pa' => $this->total_pa,

            'partner_salary_in' => $this->partner_salary_in,
            'spouse_salary_in' => $this->spouse_salary_in,
            'profit_trade_in' => $this->profit_trade_in,
            'leases_received_in' => $this->leases_received_in,
            'rent_car_in' => $this->rent_car_in,
            'land_in' => $this->land_in,
            'other_income_in' => $this->other_income_in,
            'total_in' => $this->total_in,

            'feeding_ex' => $this->feeding_ex,
            'health_ex' => $this->health_ex,
            'basic_services_ex' => $this->basic_services_ex,
            'education_ex' => $this->education_ex,
            'transport_ex' => $this->transport_ex,
            'leases_ex' => $this->leases_ex,
            'other_expenses_ex' => $this->other_expenses_ex,
            'total_ex' => $this->total_ex,
        ];

        $credit = CreditRequest::find($this->request_id);
        if (isset($credit)) {
            $credit->update($data);
            $this->request_id = $credit->id;
            $this->alert('success', 'Información de la situación economica actualizada con exito');
        } else {
            $c = CreditRequest::create($data);
            $this->request_id = $c->id;
            $this->alert('success', 'Información de la situación economica registrada con exito');
        }

    }

    public function totalAssets()
    {
        $this->accounts_receivable_as != ''     && $this->validate(['accounts_receivable_as' => 'numeric',]);
        $this->merchandise_as != ''             && $this->validate(['merchandise_as' => 'numeric',]);
        $this->investment_crops_as != ''        && $this->validate(['investment_crops_as' => 'numeric',]);
        $this->furniture_appliances_as != ''    && $this->validate(['furniture_appliances_as' => 'numeric',]);
        $this->tools_machines_as != ''          && $this->validate(['tools_machines_as' => 'numeric',]);
        $this->land_as != ''                    && $this->validate(['land_as' => 'numeric',]);
        $this->houses_buildings_as != ''        && $this->validate(['houses_buildings_as' => 'numeric',]);
        $this->other_goods_as != ''             && $this->validate(['other_goods_as' => 'numeric',]);

        $this->total_as =
            $this->vNumber($this->accounts_receivable_as) +
            $this->vNumber($this->merchandise_as) +
            $this->vNumber($this->investment_crops_as) +
            $this->vNumber($this->furniture_appliances_as) +
            $this->vNumber($this->tools_machines_as) +
            $this->vNumber($this->land_as) +
            $this->vNumber($this->houses_buildings_as) +
            $this->vNumber($this->other_goods_as);

    }

    public function totalDebts()
    {
        $this->bank_debts_pa != ''          && $this->validate(['bank_debts_pa' => 'numeric',]);
        $this->debts_suppliers_pa != ''     && $this->validate(['debts_suppliers_pa' => 'numeric',]);
        $this->debts_warehouses_pa != ''    && $this->validate(['debts_warehouses_pa' => 'numeric',]);

        $this->total_debts_pa =
            $this->vNumber($this->bank_debts_pa) +
            $this->vNumber($this->debts_suppliers_pa) +
            $this->vNumber($this->debts_warehouses_pa);
    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->dni_debtor)->first();
        if (isset($member)) {
            // $this->alert('success','Registro recuperado satisfactoriamente');
            $detail = DetailMember::where('member_id', $member->id)->first();
            $this->loadData($member, $detail);
        } else {
            $this->action = 'POST';
            // $this->resetInputFields();
            // $this->alert('warning','No se encontrarón registros asociados');
        }
    }
    public function loadData($member, $detail)
    {
        $this->member_id = $member->id;
        $this->name = $member->name;
        $this->last_name = $member->last_name;
        $this->doc_number = $member->doc_number;
//        $this->passport = $member->passport;
        $this->instruction = $member->instruction;
        $this->marital_status = $member->marital_status;
        $this->birth_date = $member->birth_date;
        $this->email = $member->email;
        $this->phone1 = $member->phone1;
        $this->phone2 = $member->phone2;
        $this->member_type = $member->member_type;
        $this->account_number = $member->acount_number;
        $this->status_member = $member->status;
        $this->url_image = $member->url_image;

        //LOAD DETAIL
        $this->member_id = $member->id;
        $this->name_spouse = $detail->name_spouse;
        $this->last_name_spouse = $detail->last_name_spouse;
        $this->dni_spouse = $detail->dni_spouse;
        $this->passport_spouse = $detail->passport_spouse;
        $this->birth_date_spouse = $detail->birth_date_spouse;
        $this->email_spouse = $detail->email_spouse;
        $this->phone1_spouse = $detail->phone1_spouse;
        $this->phone2_spouse = $detail->phone2_spouse;
        $this->city = $detail->city;
        $this->canton = $detail->canton;
        $this->parish = $detail->parish;
        $this->principal_street = $detail->principal_street;
        $this->secondary_street = $detail->secondary_street;
        $this->reference_place = $detail->reference_place;
//        $this->name_reference = $detail->name_reference;
//        $this->last_name_reference = $detail->last_name_reference;
//        $this->dni_reference = $detail->dni_reference;
//        $this->relationship = $detail->relationship;
//        $this->time_to_meet = $detail->time_to_meet;
//        $this->instruction_reference = $detail->instruction_reference;

        //CHANGE VALUE ACTION
        $this->action = 'PUT';
    }

    public function totalPassives()
    {
        $this->total_debts_pa != '' && $this->validate(['total_debts_pa' => 'numeric',]);
        $this->patrimony_pa != ''   && $this->validate(['patrimony_pa' => 'numeric',]);
        $this->total_pa =
            $this->vNumber($this->total_debts_pa) -
            $this->vNumber($this->patrimony_pa);
    }

    public function totalIncomes(){
        $this->partner_salary_in != '' && $this->validate(['partner_salary_in' => 'numeric',]);
        $this->spouse_salary_in != ''  && $this->validate(['spouse_salary_in' => 'numeric',]);
        $this->profit_trade_in != ''   && $this->validate(['profit_trade_in' => 'numeric',]);
        $this->leases_received_in != ''&& $this->validate(['leases_received_in' => 'numeric',]);
        $this->rent_car_in != ''       && $this->validate(['rent_car_in' => 'numeric',]);
        $this->land_in != ''           && $this->validate(['land_in' => 'numeric',]);
        $this->other_income_in != ''   && $this->validate(['other_income_in' => 'numeric',]);

        $this->total_in =
            $this->vNumber($this->partner_salary_in) +
            $this->vNumber($this->spouse_salary_in)+
            $this->vNumber($this->profit_trade_in)+
            $this->vNumber($this->leases_received_in)+
            $this->vNumber($this->rent_car_in)+
            $this->vNumber($this->land_in)+
            $this->vNumber($this->other_income_in);
    }

    public function totalExpenses(){
        $this->feeding_ex != ''          && $this->validate(['feeding_ex' => 'numeric',]);
        $this->health_ex != ''           && $this->validate(['health_ex' => 'numeric',]);
        $this->basic_services_ex != ''   && $this->validate(['basic_services_ex' => 'numeric',]);
        $this->education_ex != ''        && $this->validate(['education_ex' => 'numeric',]);
        $this->transport_ex != ''        && $this->validate(['transport_ex' => 'numeric',]);
        $this->leases_ex != ''           && $this->validate(['leases_ex' => 'numeric',]);
        $this->other_expenses_ex != ''   && $this->validate(['other_expenses_ex' => 'numeric',]);

        $this->total_ex =
            $this->vNumber($this->feeding_ex) +
            $this->vNumber($this->health_ex)+
            $this->vNumber($this->basic_services_ex)+
            $this->vNumber($this->education_ex)+
            $this->vNumber($this->transport_ex)+
            $this->vNumber($this->leases_ex)+
            $this->vNumber($this->other_expenses_ex);
    }

    public function vNumber($number)
    {
        if (is_numeric($number))
            return $number;
        else
            return 0;
    }


    #region CONFIG TEMPLATE
    public $listButtonFrame = [
        "1" => "button text-white bg-theme-1",
        "2" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "3" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "4" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "5" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "6" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "7" => "button text-gray-600 bg-gray-200 dark:bg-dark-1"
    ];
    public $listTextFrame = [
        "1" => "font-medium text-base lg:mt-3 ml-3 lg:mx-auto",
        "2" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "3" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "4" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "5" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "6" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "7" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
    ];
    public $visibleFrame = [
        "1" => true,
        "2" => false,
        "3" => false,
        "4" => false,
        "5" => false,
        "6" => false,
        "7" => false,
    ];
    public $pageFrame = 1;

    public function selectFrame($id)
    {
        for ($i = 1; $i <= count($this->listButtonFrame); $i++) {
            if ($id == $i) {
                $this->listButtonFrame[$i] = "button text-white bg-theme-1";
                $this->listTextFrame[$i] = "font-medium text-base lg:mt-3 ml-3 lg:mx-auto";
                $this->visibleFrame[$i] = true;
            } else {
                $this->listButtonFrame[$i] = "button text-gray-600 bg-gray-200 dark:bg-dark-1";
                $this->listTextFrame[$i] = "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600";
                $this->visibleFrame[$i] = false;
            }
        }
    }

    #endregion
}
