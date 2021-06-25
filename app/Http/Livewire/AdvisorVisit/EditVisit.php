<?php

namespace App\Http\Livewire\AdvisorVisit;

use App\Models\AdvisorVisit;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\MemberReference;
use Livewire\Component;

class EditVisit extends Component
{
    public $visit;
    public $member;
    public $member_detail;


    //step1
    public $visit_id = null, $credit_type, $name_debtor, $dni_debtor, $amount, $reason_invest, $pay, $deadline, $variable_fee = 0, $credit_segment;

    //step2
    public $member_id = null, $code, $status, $doc_type, $doc_number, $name, $last_name, $instruction, $birth_place, $country, $birth_date;
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

    //step 6
    public $living_place_lat, $living_place_lng, $commerce_lat, $commerce_lng, $url_living, $url_commerce;

    public $action = 'PUT';
    public $living_place_lat_edit = null, $living_place_lng_edit = null, $commerce_lat_edit = null, $commerce_lng_edit = null;
    public $check_living = false, $check_commerce = false;

    public function mount($id)
    {
        $this->visit = AdvisorVisit::find($id);
        $this->member = Member::find($this->visit->member_id);
        $this->member_detail = $this->member->detail;
//        dd($this->visit);
        $this->visit_id = $this->visit->id;
        $this->credit_type = $this->visit->credit_type;
        $this->name_debtor = $this->visit->name_debtor;
        $this->dni_debtor = $this->visit->dni_debtor;
        $this->amount = $this->visit->amount;
        $this->reason_invest = $this->visit->reason_invest;
        $this->pay = $this->visit->pay;
        $this->deadline = $this->visit->deadline;
        $this->variable_fee = $this->visit->variable_fee;
        $this->credit_segment = $this->visit->credit_segment;
        $this->member_id = $this->visit->member_id;
        $this->code = $this->visit->code;
        $this->status = $this->visit->status;

        $this->doc_type = $this->member->doc_type;
        $this->doc_number = $this->member->doc_number;
        $this->name = $this->member->name;
        $this->last_name = $this->member->last_name;
        $this->instruction = $this->member->instruction;
        $this->birth_place = $this->member->birth_place;
        $this->country = $this->member->country;
        $this->birth_date = $this->member->birth_date;
        $this->marital_status = $this->member->marital_status;
        $this->gender = $this->member->gender;
        $this->email = $this->member->email;
        $this->phone1 = $this->member->phone1;
        $this->phone2 = $this->member->phone2;
        $this->residence_address = $this->member->residence_address;
        $this->member_type = $this->member->member_type;
        $this->account_number = $this->member->account_number;
        $this->status_member = $this->member->status;
        $this->url_image = $this->member->url_image;

        $this->detail_member_id = $this->member_detail->id;
        $this->name_spouse = $this->member_detail->name_spouse;
        $this->last_name_spouse = $this->member_detail->last_name_spouse;
        $this->dni_spouse = $this->member_detail->dni_spouse;
        $this->phone1_spouse = $this->member_detail->phone1_spouse;
        $this->economic_activity = $this->member_detail->economic_activity;
        $this->contract_type = $this->member_detail->contract_type;
        $this->company_name = $this->member_detail->company_name;
        $this->company_address = $this->member_detail->company_address;
        $this->company_phone = $this->member_detail->company_phone;
        $this->service_time = $this->member_detail->service_time;
        $this->profession_spouse = $this->member_detail->profession_spouse;
        $this->actual_charge_spouse = $this->member_detail->actual_charge_spouse;
        $this->income_spouse = $this->member_detail->income_spouse;
        $this->passport_spouse = $this->member_detail->passport_spouse;
        $this->birth_date_spouse = $this->member_detail->birth_date_spouse;
        $this->email_spouse = $this->member_detail->email_spouse;
        $this->phone2_spouse = $this->member_detail->phone2_spouse;
        $this->city = $this->member_detail->city;
        $this->canton = $this->member_detail->canton;
        $this->parish = $this->member_detail->parish;
        $this->principal_street = $this->member_detail->principal_street;
        $this->secondary_street = $this->member_detail->secondary_street;
        $this->reference_place = $this->member_detail->reference_place;

        $this->business_name = $this->visit->business_name;
        $this->ruc = $this->visit->ruc;
        $this->business_age = $this->visit->business_age;
        $this->sales_place = $this->visit->sales_place;
        $this->local_type = $this->visit->local_type;
        $this->business_time = $this->visit->business_time;
        $this->business_address = $this->visit->business_address;
        $this->streets = $this->visit->streets;
        $this->number = $this->visit->number;
        $this->business_reference = $this->visit->business_reference;
        $this->living_place_lat = $this->visit->living_place_lat;
        $this->living_place_lng = $this->visit->living_place_lng;
        $this->commerce_lat = $this->visit->commerce_lat;
        $this->commerce_lng = $this->visit->commerce_lng;
        $this->url_living = $this->visit->url_living;
        $this->url_commerce = $this->visit->url_commerce;


    }

    public function render()
    {
        $data_reference = MemberReference::where('member_id', $this->member_id)->where('status', 1)->get();
        return view('livewire.advisor-visit.edit-visit', compact('data_reference'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function storeStep1()
    {
        $data = [
            'member_id' => $this->member_id,
            'code' => $this->code,
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

        $this->visit->update($data);
        $this->visit_id = $this->visit->id;
        $this->alert('success', 'Información de crédito actualizada con exito');

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

        $this->member->update($data);
        $this->member_id = $this->member->id;
        $this->alert('success', 'Información actualizada con exito');

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
        if ($this->member_id != null) {

            $this->member_detail->update($data);
            $this->detail_member_id = $this->member_detail->id;
            $this->alert('success', 'Información del cónyugue actualizada con exito');

        } else {
            $this->alert('error', 'No se puede guardar la información');
        }

    }

    public function storeStep4()
    {

        $data = [
            'member_id' => $this->member_id,
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

        $this->visit->update($data);
        $this->visit_id = $this->visit->id;
        $this->alert('success', 'Información de negocio actualizada con exito');

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
            'age' => $this->age_ref,
            'relationship' => $this->relationship_ref,
            'instruction' => $this->instruction_ref,
            'time_to_meet' => $this->time_to_meet_ref,
            'phone' => $this->phone_ref,
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

        $pathLiving = '';
        if ($this->url_living != '') {
            $this->validate(['url_living' => 'image'], ['url_living.image' => 'La imagen debe ser de formato: .jpg,.jpeg ó .png']);
            //save image
            $name = "LIVING-" . time() . '.' . $this->url_living->getClientOriginalExtension();
            $pathLiving = 'images/credit-request/' . $this->url_living->storeAs('/', $name, 'credit-request');
        }
        $pathCommerce = '';
        if ($this->url_commerce != '') {
            $this->validate(['url_commerce' => 'image'], ['url_commerce.image' => 'La imagen debe ser de formato: .jpg,.jpeg ó .png']);
            //save image
            $name = "COMMERCE-" . time() . '.' . $this->url_commerce->getClientOriginalExtension();
            $pathCommerce = 'images/advisor-visit/' . $this->url_commerce->storeAs('/', $name, 'advisor-visit');
        }

        $data = [
            'member_id' => $this->member_id,
            'living_place_lat' => is_null($this->living_place_lat_edit) ? $this->living_place_lat : $this->living_place_lat_edit,
            'living_place_lng' => is_null($this->living_place_lng_edit) ? $this->living_place_lng : $this->living_place_lng_edit,
            'commerce_lat' => is_null($this->commerce_lat_edit) ? $this->commerce_lat : $this->commerce_lat_edit,
            'commerce_lng' => is_null($this->commerce_lng_edit) ? $this->commerce_lng : $this->commerce_lng_edit,
            'url_living' => $pathLiving,
            'url_commerce' => $pathCommerce,

        ];

        $this->visit->update($data);
        $this->visit_id = $this->visit->id;
        $this->living_place_lat = '';
        $this->living_place_lng = '';
        $this->commerce_lat = '';
        $this->commerce_lng = '';
        $this->alert('success', 'Información de la vivienda y comercio actualizada con exito');


    }

    #region CONFIG TEMPLATE
    public $listButtonFrame = [
        "1" => "button text-white bg-theme-1",
        "2" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "3" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "4" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "5" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "6" => "button text-gray-600 bg-gray-200 dark:bg-dark-1"
    ];
    public $listTextFrame = [
        "1" => "font-medium text-base lg:mt-3 ml-3 lg:mx-auto",
        "2" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "3" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "4" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "5" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "6" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
    ];
    public $visibleFrame = [
        "1" => true,
        "2" => false,
        "3" => false,
        "4" => false,
        "5" => false,
        "6" => false,
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
