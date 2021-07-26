<?php

namespace App\Http\Livewire\AdvisorVisit;

use App\Models\AdvisorVisit;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\MemberReference;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ConfigTable;

class NewVisit extends Component
{
    use WithFileUploads;

    //step1
    public $request_id = null, $credit_type, $name_debtor, $dni_debtor, $amount, $reason_invest, $pay, $deadline, $variable_fee = 0, $credit_segment;

    //step2
    public $member_id = null, $code, $status, $doc_type='Cédula', $doc_number, $name, $last_name, $instruction, $birth_place, $country, $birth_date;
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
    public $commerce_lat_edit,$living_place_lng_edit ,$commerce_lng_edit,$living_place_lat_edit, $living_place_lat, $living_place_lng, $commerce_lat, $commerce_lng, $url_living, $url_commerce;

    public $action = 'POST';
    public $check_living = false, $check_commerce = false;
    //CONFIG TABLE
    public $secuence_tab = 0;

    public function render()
    {
        $this->getLastNumber();
        $data_reference = MemberReference::where('member_id', $this->member_id)->where('status', 1)->get();
        try{
            if ($this->deadline > 0 && $this->amount > 0){
                $this->pay = round($this->amount / $this->deadline, 2);
            }else{
                $this->pay  = 0 ;
            }
        }catch(Exception $e){
            $this->deadline = 0;
            $this->pay = 0;
        }
        return view('livewire.advisor-visit.new-visit', compact('data_reference'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function getLastNumber()
    {
        $re_last = ConfigTable::where('identifier', 'visitas')->first();
        if ($re_last) {
            $this->secuence_tab = $re_last->secuence + 1;
            $codeAux = strval($re_last->complemenet + $re_last->secuence + 1);
            $codeAux = ltrim($codeAux, '1');
            $this->code = ($re_last->serie) . "" . ($codeAux);
            return;
        }
        $this->code = 0;

    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->dni_debtor)->first();
        if ($member) {
            $this->member_id = $member->id;
            if (isset($member)) {
                // $this->alert('success','Registro recuperado satisfactoriamente');
                $detail = DetailMember::where('member_id', $member->id)->first();
                $this->loadData($member, $detail);
                $this->alert('success', '¡Datos del cliente cargados con exíto!');
            } else {
                $this->action = 'POST';
                // $this->resetInputFields();
                // $this->alert('warning','No se encontrarón registros asociados');
            }
            return;
        }
        $this->alert('warning', 'No se encontrarón registros asociados');
    }

    public function loadData($member, $detail)
    {
//        $this->member_id = $member->id;
        $this->name = $member->name;
        $this->last_name = $member->last_name;
        $this->name_debtor = $member->last_name." ".$member->name;
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
//        $this->member_id = $member->id;
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


    public function storeStep1()
    {
        $this->validate([
                'code' => 'required',
                'credit_type' => 'required',
                'name_debtor' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
                'dni_debtor' => 'required|digits:10',
                'amount' => 'required|numeric',
                'reason_invest' => 'required',
                'pay' => 'required',
                'deadline' => 'required',
                'variable_fee' => 'required',
                'credit_segment' => 'required',
            ],[
                'name_debtor.regex' => 'Campo acpeta solo letras.',
            ]);
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
        if ($this->member_id != null) {
            $credit = AdvisorVisit::find($this->request_id);
            if (isset($credit)) {
                $credit->update($data);
                $this->request_id = $credit->id;
                $this->alert('success', 'Información de crédito actualizada con exito');
            } else {
                $data_credit = AdvisorVisit::create($data);
                $this->request_id = $data_credit->id;
                $this->alert('success', 'Información de crédito registrada con exito.');
            }
        } else {
            $this->alert('error', 'No se puede guardar la información. Seleccione un Socio');
        }

    }

    public function storeStep2()
    {
        $this->Validate([
            'doc_type' => 'required',
            'doc_number' => 'required|numeric',
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'instruction' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'birth_place' => 'required',
            'country' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'birth_date' => 'required|date',
            'marital_status' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'gender' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'email' => 'required|email',
            'residence_address' => 'required',
            ],[
                'name.regex' => ' Ingrese solo letras',
                'last_name.regex' => ' Ingrese solo letras',
                'instruction.regex' => ' Ingrese solo letras',
                'country.regex' => ' Ingrese solo letras',
                'gender.regex' => ' Ingrese solo letras',
            ]);
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
        if($this->dni_spouse!="" || $this->name_spouse != ""){
            $this->validate([
                'name_spouse' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
                'last_name_spouse' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
                'dni_spouse' => 'digits:10',
                'phone1_spouse' => 'required|digits:10',
                'economic_activity' => 'required',
                'contract_type' => 'required',
                'company_name' => 'required',
                'company_address' => 'required',
                'company_phone' => 'required',
                'service_time' => 'required',
                'profession_spouse' => 'required',
                'actual_charge_spouse' => 'required',
                'income_spouse' => 'required',
            ]);
        }

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
            $this->alert('error', 'No se puede guardar la información.');
        }

    }

    public function storeStep4()
    {

        $this->validate([
            'business_name' => 'required',
            'ruc' => 'required',
            'business_age' => 'required',
            'sales_place' => 'required',
            'local_type' => 'required',
            'business_time' => 'required',
            'business_address' => 'required',
            'streets' => 'required',
            'number' => 'required',
            'business_reference' => 'required',
        ],[
            'business_name.required' => 'Campo obligatorio',
            'ruc.required' => 'Campo obligatorio',
            'business_age.required' => 'Campo obligatorio',
            'sales_place.required' => 'Campo obligatorio',
            'local_type.required' => 'Campo obligatorio',
            'business_time.required' => 'Campo obligatorio',
            'business_address.required' => 'Campo obligatorio',
            'streets.required' => 'Campo obligatorio',
            'number.required' => 'Campo obligatorio',
            'business_reference.required' => 'Campo obligatorio',
        ]);

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
        if ($this->member_id != null) {
        $credit = AdvisorVisit::find($this->request_id);
        if (isset($credit)) {
            $credit->update($data);
            $this->request_id = $credit->id;
            $this->alert('success', 'Información de negocio actualizada con exito');
        } else {
            $c = AdvisorVisit::create($data);
            $this->request_id = $c->id;
            $this->alert('success', 'Información de negocio registrada con exito');
        }
        }else {
            $this->alert('error', 'No se puede guardar la información. Seleccione un Socio');
        }

    }

    #region step5
    public function storeReference()
    {
        $this->validate([
            'name_ref' => 'required',
            'last_name_ref' => 'required',
            'dni_ref' => 'required',
            'age_ref' => 'required',
            'relationship_ref' => 'required',
            'instruction_ref' => 'required',
            'time_to_meet_ref' => 'required',
            'phone_ref' => 'required',
        ],[
            'name_ref.required' => 'Campo obligatorio',
            'last_name_ref.required' => 'Campo obligatorio',
            'dni_ref.required' => 'Campo obligatorio',
            'age_ref.required' => 'Campo obligatorio',
            'relationship_ref.required' => 'Campo obligatorio',
            'instruction_ref.required' => 'Campo obligatorio',
            'time_to_meet_ref.required' => 'Campo obligatorio',
            'phone_ref.required' => 'Campo obligatorio',
        ]);

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
        $this->validate([
            'name_ref' => 'required',
            'last_name_ref' => 'required',
            'dni_ref' => 'required',
            'age_ref' => 'required',
            'relationship_ref' => 'required',
            'instruction_ref' => 'required',
            'time_to_meet_ref' => 'required',
            'phone_ref' => 'required',
        ],[
            'name_ref.required' => 'Campo obligatorio',
            'last_name_ref.required' => 'Campo obligatorio',
            'dni_ref.required' => 'Campo obligatorio',
            'age_ref.required' => 'Campo obligatorio',
            'relationship_ref.required' => 'Campo obligatorio',
            'instruction_ref.required' => 'Campo obligatorio',
            'time_to_meet_ref.required' => 'Campo obligatorio',
            'phone_ref.required' => 'Campo obligatorio',
        ]);

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
            'living_place_lat' => $this->living_place_lat,
            'living_place_lng' => $this->living_place_lng,
            'commerce_lat' => $this->commerce_lat,
            'commerce_lng' => $this->commerce_lng,
            'url_living' => $pathLiving,
            'url_commerce' => $pathCommerce,
        ];

        if ($this->member_id != null) {
            $credit = AdvisorVisit::find($this->request_id);
            if (isset($credit)) {
                $credit->update($data);
                $this->request_id = $credit->id;
                $this->alert('success', 'Información de la vivienda y comercio actualizada con exito');
            } else {
                $c = AdvisorVisit::create($data);
                $this->request_id = $c->id;
                $this->alert('success', 'Información de la vivienda y comercio registrada con exito');
            }
        }else {
            $this->alert('error', 'No se puede guardar la información');
        }
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
