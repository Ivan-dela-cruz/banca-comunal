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


    //step1
    public $request_id = null, $credit_type, $name_debtor, $dni_debtor, $amount, $reason_invest, $pay, $deadline, $variable_fee, $credit_segment;

    //step2
    public $member_id = null, $doc_type, $doc_number, $name, $last_name, $instruction, $birth_place, $country, $birth_date;
    public $marital_status, $gender, $email, $phone1, $phone2, $residence_address;

    //step3
    public $detail_member_id = null, $name_spouse, $last_name_spouse, $dni_spouse, $phone1_spouse, $economic_activity, $contract_type;
    public $company_name, $company_address, $company_phone, $service_time, $profession_spouse, $actual_charge_spouse, $income_spouse;

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

    public function render()
    {
        $data_reference = MemberReference::where('member_id', $this->member_id)->get();
//        $this->totalAssets();
//        $this->totalDebts();
//        $this->totalPassives();
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
//        $this->validate([
//            'accounts_receivable_as' => 'numeric',
//            'merchandise_as' => 'numeric',
//            'investment_crops_as' => 'numeric',
//            'furniture_appliances_as' => 'numeric',
//            'tools_machines_as' => 'numeric',
//            'land_as' => 'numeric',
//            'houses_buildings_as' => 'numeric',
//            'other_goods_as' => 'numeric',
//            'total_as' => 'numeric',
//
//            'bank_debts_pa' => 'numeric',
//            'debts_suppliers_pa' => 'numeric',
//            'debts_warehouses_pa' => 'numeric',
//            'total_debts_pa' => 'numeric',
//            'patrimony_pa' => 'numeric',
//            'total_pa' => 'numeric',
//
//            'partner_salary_in' => 'numeric',
//            'spouse_salary_in' => 'numeric',
//            'profit_trade_in' => 'numeric',
//            'leases_received_in' => 'numeric',
//            'rent_car_in' => 'numeric',
//            'land_in' => 'numeric',
//            'other_income_in' => 'numeric',
//            'total_in' => 'numeric',
//
//            'feeding_ex' => 'numeric',
//            'health_ex' => 'numeric',
//            'basic_services_ex' => 'numeric',
//            'education_ex' => 'numeric',
//            'transport_ex' => 'numeric',
//            'leases_ex' => 'numeric',
//            'other_expenses_ex' => 'numeric',
//            'total_ex' => 'numeric',
//        ]);

        $data = [
            'accounts_receivable_as'=> $this->accounts_receivable_as,
            'merchandise_as'=> $this->merchandise_as,
            'investment_crops_as'=> $this->investment_crops_as,
            'furniture_appliances_as'=> $this->furniture_appliances_as,
            'tools_machines_as'=> $this->tools_machines_as,
            'land_as'=> $this->land_as,
            'houses_buildings_as'=> $this->houses_buildings_as,
            'other_goods_as'=> $this->other_goods_as,
            'total_as'=> $this->total_as,

            'bank_debts_pa'=> $this->bank_debts_pa,
            'debts_suppliers_pa'=> $this->debts_suppliers_pa,
            'debts_warehouses_pa'=> $this->debts_warehouses_pa,
            'total_debts_pa'=> $this->total_debts_pa,
            'patrimony_pa'=> $this->patrimony_pa,
            'total_pa'=> $this->total_pa,

            'partner_salary_in'=> $this->partner_salary_in,
            'spouse_salary_in'=> $this->spouse_salary_in,
            'profit_trade_in'=> $this->profit_trade_in,
            'leases_received_in'=> $this->leases_received_in,
            'rent_car_in'=> $this->rent_car_in,
            'land_in'=> $this->land_in,
            'other_income_in'=> $this->other_income_in,
            'total_in'=> $this->total_in,

            'feeding_ex'=> $this->feeding_ex,
            'health_ex'=> $this->health_ex,
            'basic_services_ex'=> $this->basic_services_ex,
            'education_ex'=> $this->education_ex,
            'transport_ex'=> $this->transport_ex,
            'leases_ex'=> $this->leases_ex,
            'other_expenses_ex'=> $this->other_expenses_ex,
            'total_ex'=> $this->total_ex,
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

//    public function totalAssets()
//    {
//        $this->total_as = $this->accounts_receivable_as + $this->merchandise_as + $this->investment_crops_as + $this->furniture_appliances_as +
//            $this->tools_machines_as + $this->land_as + $this->houses_buildings_as + $this->other_goods_as;
//    }
//
//    public function totalDebts()
//    {
//        $this->total_debts_pa = $this->bank_debts_pa + $this->debts_suppliers_pa + $this->debts_warehouses_pa;
//    }
//
//    public function totalPassives()
//    {
//        $this->total_pa = $this->total_debts_pa + $this->patrimony_pa;
//    }


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
