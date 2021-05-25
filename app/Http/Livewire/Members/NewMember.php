<?php

namespace App\Http\Livewire\Members;

use App\Models\MemberReference;
use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\ConfigTable;
use App\Models\AccountClient;

class NewMember extends Component
{

    public $listButtonFrame = [
        "1" => "button text-white bg-theme-1",
        "2" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "3" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "4" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "5" => "button text-gray-600 bg-gray-200 dark:bg-dark-1"
    ];
    public $listTextFrame = [
        "1" => "font-medium text-base lg:mt-3 ml-3 lg:mx-auto",
        "2" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "3" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "4" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "5" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600"
    ];
    public $visibleFrame = [
        "1" => true,
        "2" => false,
        "3" => false,
        "4" => false,
        "5" => false
    ];
    public $pageFrame = 1;

    public $data_id, $status = true, $url_image, $member_type="cliente", $acount_number;
    public $member_id = null, $city;
    public $canton, $parish, $principal_street, $secundary_street, $reference_place;
    public $members;
    public $modal = false, $input_search = '', $action = 'POST';

    //Personal Data
    public $name, $last_name, $dni, $passport, $instruction, $marital_status, $birth_date, $email, $phone1, $phone2;
    //Spouse Data
    public $name_spouse, $last_name_spouse, $dni_spouse, $passport_spouse, $birth_date_spouse, $email_spouse, $phone1_spouse, $phone2_spouse;
    //References
    public $action_ref = 'POST';
    public $reference_id = null, $name_ref, $last_name_ref, $dni_ref, $relationship_ref, $instruction_ref, $time_to_meet_ref;

    //INPUT SEARCH VALUEs
    public $search_member = "",$block_account=false;
    //DATA ACCOUNT
    public $serie_ac,$secuence_ac, $number_ac;
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

    public function render()
    {
        $data_reference = MemberReference::where('member_id', $this->member_id)->get();
        $this->getLastNumber();
        $this->getAccount();
       
        return view('livewire.members.new-member', compact('data_reference'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function getAccount()
    {
        $account = AccountClient::where('member_id', $this->member_id)->first();
        if($account){
            $this->block_account = true;
            return;
        }
        
        $this->block_account = false;
    }
    public function getLastNumber()
    {
        $re_last = ConfigTable::where('identifier', $this->member_type)->first();
        if($re_last){
            $codeAux = strval($re_last->complemenet+$re_last->secuence+1);
            $codeAux= ltrim($codeAux, '1');
            $this->serie_ac=$re_last->serie;
            $this->secuence_ac=$re_last->secuence+1;
            $this->number_ac=($re_last->serie)."".($codeAux);
            $this->acount_number =  $this->number_ac;
            return;
        }
        $this->acount_number = 0;
       
    }
    public function loadData($member, $detail)
    {
        $this->data_id = $member->id;
        $this->name = $member->name;
        $this->last_name = $member->last_name;
        $this->dni = $member->doc_number;
        $this->passport = $member->passport;
        $this->instruction = $member->instruction;
        $this->marital_status = $member->marital_status;
        $this->birth_date = $member->birth_date;
        $this->email = $member->email;
        $this->phone1 = $member->phone1;
        $this->phone2 = $member->phone2;
        $this->member_type = $member->member_type;
        $this->acount_number = $member->acount_number;
        $this->status = $member->status;
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
        $this->secundary_street = $detail->secundary_street;
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

    public function findMember()
    {
        $member = Member::where('doc_number', $this->search_member)->first();
        if (isset($member)) {
            // $this->alert('success','Registro recuperado satisfactoriamente');
            $detail = DetailMember::where('member_id', $member->id)->first();
            $this->loadData($member, $detail);
            $this->getAccount();
            $this->alert('success', 'Datos cargados exitosamente!');
        } else {
            $this->action = 'POST';
            $this->block_account = false;
            $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros!');
            // $this->resetInputFields();
            // $this->alert('warning','No se encontrarón registros asociados');
        }
    }

    public function resetInputFields()
    {
        $this->data_id = '';
        $this->name = '';
        $this->last_name = '';
        $this->dni = '';
        $this->passport = '';
        $this->instruction = '';
        $this->marital_status = '';
        $this->birth_date = '';
        $this->email = '';
        $this->phone1 = '';
        $this->phone2 = '';
        $this->member_type = '';
        $this->acount_number = '';
        $this->status = false;
        $this->url_image = '';

        //LOAD DETAIL
        $this->member_id = null;
        $this->name_spouse = '';
        $this->last_name_spouse = '';
        $this->dni_spouse = '';
        $this->passport_spouse = '';
        $this->birth_date_spouse = '';
        $this->email_spouse = '';
        $this->phone1_spouse = '';
        $this->phone2_spouse = '';
        $this->city = '';
        $this->canton = '';
        $this->parish = '';
        $this->principal_street = '';
        $this->secundary_street = '';
        $this->reference_place = '';
//        $this->name_reference = '';
//        $this->last_name_reference = '';
//        $this->dni_reference = '';
//        $this->relationship = '';
//        $this->time_to_meet = '';
//        $this->instruction_reference = '';
        //chang value action
        $this->action = 'POST';
    }

    public function OpenList()
    {
        $this->members = Member::all();

    }

    public function store()
    {
        /*
        $validation = $this->validate([
    		'name'	=>	'required',
    		'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'dni' => 'required|unique:students',
            'status' => 'required'
        ]);
        */

        $data_member = [
            'name' => $this->name,
            'last_name' => $this->last_name,
            'doc_number' => $this->dni,
//            'passport' => $this->passport,
            'instruction' => $this->instruction,
            'marital_status' => $this->marital_status,
            'birth_date' => $this->birth_date,
            'email' => $this->email,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'member_type' => $this->member_type,
            'account_number' => $this->acount_number,
            'status' => $this->status,
            'url_image' => $this->url_image
        ];
        $member_create = Member::create($data_member);
        $this->member_id = $member_create->id;
        $data_deatil = [
            'member_id' => $this->member_id,
            'name_spouse' => $this->name_spouse,
            'last_name_spouse' => $this->last_name_spouse,
            'dni_spouse' => $this->dni_spouse,
            'passport_spouse' => $this->passport_spouse,
            'birth_date_spouse' => $this->birth_date_spouse,
            'email_spouse' => $this->email_spouse,
            'phone1_spouse' => $this->phone1_spouse,
            'phone2_spouse' => $this->phone2_spouse,
            'city' => $this->city,
            'canton' => $this->canton,
            'parish' => $this->parish,
            'principal_street' => $this->principal_street,
            'secundary_street' => $this->secundary_street,
            'reference_place' => $this->reference_place,
//            'name_reference'=>$this->name_reference,
//            'last_name_reference'=>$this->last_name_reference,
//            'dni_reference'=>$this->dni_reference,
//            'relationship'=>$this->relationship,
//            'time_to_meet'=>$this->time_to_meet,
//            'instruction_reference'=>$this->instruction_reference
        ];
        $detail_member_create = DetailMember::create($data_deatil);
        $this->alert('success', '¡Registro ingresado exitosamente!');
    }

    public function storePersonal()
    {

        $this->validate([
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'dni' => ['required', 'unique:members,doc_number', 'numeric', 'digits:10'],
            'passport' => 'numeric',
            'instruction' => 'required',
            'marital_status' => 'required',
            'birth_date' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'phone1' => 'required',
            'phone2' => 'numeric',
        ], [
            'name.required' => 'Campo obligatorio.',
            'last_name.required' => 'Campo obligatorio.',
            'name.regex' => 'Campo inválido.',
            'last_name.regex' => 'Campo inválido.',
            'dni.required' => 'Campo obligatorio.',
            'dni.unique' => 'La identificación ya existe.',
            'dni.numeric' => 'Campo obligatorio.',
            'dni.digits' => 'Campo obligatorio.',
            'passport.numeric' => 'Campo inválido.',
            'instruction.required' => 'Campo obligatorio.',
            'marital_status.required' => 'Campo obligatorio.',
            'birth_date.required' => 'Campo obligatorio.',
            'email.required' => 'Campo obligatorio.',
            'email.email'=>'Campo inválido.',
            'email.unique'=>'El correo ya existe.',
            'phone1.required' => 'Campo obligatorio.',
            'phone2.numeric' => 'Campo inválido.',
        ]);

        $data_member = [
            'name' => $this->name,
            'last_name' => $this->last_name,
            'doc_number' => $this->dni,
//            'passport' => $this->passport,
            'instruction' => $this->instruction,
            'marital_status' => $this->marital_status,
            'birth_date' => $this->birth_date,
            'email' => $this->email,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2
        ];
        $member_t = Member::where('doc_number', $this->dni)->first();
        if (is_null($member_t)) {
            $member_create = Member::create($data_member);
            $this->member_id = $member_create->id;
            $data_deatil = [
                'member_id' => $this->member_id
            ];
            $detail_member_create = DetailMember::create($data_deatil);
        } else {
            $member_t->update($data_member);
        }
        $this->alert('success', 'Datos Personales registrados con exito.');
    }

    public function storeSpouse()
    {
        $this->validate([
            'name_spouse' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'last_name_spouse' => 'regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'dni_spouse' => 'numeric|digits:10',
            'passport_spouse' => 'numeric',
            //'birth_date_spouse',
            'email_spouse' => ['email', 'unique:detail_members,email_spouse'],
            'phone1_spouse' => 'numeric|digits:10',
            'phone2_spouse' => 'numeric|digits:10',
        ],[
            'name_spouse.regex'=>'Campo inválido.',
            'last_name_spouse.regex'=>'Campo inválido.',
            'dni_spouse.numeric' => 'Campo inválido.',
            'dni_spouse.digits' => 'Campo inválido.',
            'passport_spouse.numeric' =>'Campo inválido.',
//            'birth_date_spouse',
            'email_spouse.email'=>'Campo inválido.',
            'email_spouse.unique'=>'El correo ya existe.',
            'phone1_spouse.numeric'=>'Campo inválido.',
            'phone2_spouse.numeric'=>'Campo inválido.',
        ]);

        $detail = DetailMember::where('member_id', $this->member_id);
        $data_deatil = [
            'member_id' => $this->member_id,
            'name_spouse' => $this->name_spouse,
            'last_name_spouse' => $this->last_name_spouse,
            'dni_spouse' => $this->dni_spouse,
            'passport_spouse' => $this->passport_spouse,
            'birth_date_spouse' => $this->birth_date_spouse,
            'email_spouse' => $this->email_spouse,
            'phone1_spouse' => $this->phone1_spouse,
            'phone2_spouse' => $this->phone2_spouse
        ];
        $detail->update($data_deatil);
        $this->alert('success', 'Datos del/la Cónyuge registrados con exito.');
    }

    public function storeAddress()
    {
        $detail = DetailMember::where('member_id', $this->member_id);
        $data_deatil = [
            'city' => $this->city,
            'canton' => $this->canton,
            'parish' => $this->parish,
            'principal_street' => $this->principal_street,
            'secondary_street' => $this->secundary_street,
            'reference_place' => $this->reference_place
        ];
        $detail->update($data_deatil);
        $this->alert('success', 'Registro agregado con exíto!');
    }

    public function storeFinal()
    {
        $member_t = Member::find($this->member_id);
        $account= $member_t->account();
        $data_deatil = [
            'member_type' => $this->member_type,
            'account_number' => $this->acount_number,
            'status' => $this->status,
            'url_image' => $this->url_image
        ];
        $member_t->update($data_deatil);

        if($account){ 
            AccountClient::create([
                'member_id'=>$this->member_id,
                'code'=>$this->serie_ac,
                'number'=>$this->acount_number,
                'sec'=>$this->secuence_ac,
                'type'=>$this->member_type
            ]);
            $config =  ConfigTable::where('identifier',$this->member_type)->first();
            $config->secuence = $this->secuence_ac;
            $config->save();
        }
        $this->alert('success','¡Registro agregado exitosamente!');
    }

    public function edit($id)
    {

        $member = Member::findOrFail($id);
        if (isset($member)) {
            $this->alert('success', 'Registro recuperado satisfactoriamente', [
                'position' => 'bottom-end']);
            $detail = DetailMember::where('member_id', $member->id)->first();
            $this->loadData($member, $detail);
            $this->emit('studentStore');
        } else {
            $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }

    public function update()
    {
        /*
        $validation = $this->validate([
    		'name'	=>	'required',
    		'last_name' => 'required',
            'email' => ['required',Rule::unique('users')->ignore($this->data_id)],
            'dni' => ['required',Rule::unique('students')->ignore($this->data_id)],
            'status' => 'required'
        ]);
        */
        $member = Member::find($this->data_id);
        $detail = DetailMember::where('member_id', $member->id);
        $data_member = [
            'name' => $this->name,
            'last_name' => $this->last_name,
            'dni' => $this->dni,
            'passport' => $this->passport,
            'instruction' => $this->instruction,
            'marital_status' => $this->marital_status,
            'birth_date' => $this->birth_date,
            'email' => $this->email,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'member_type' => $this->member_type,
            'acount_number' => $this->acount_number,
            'status' => $this->status,
            'url_image' => $this->url_image
        ];
        $data_deatil = [
            'member_id' => $this->member_id,
            'name_spouse' => $this->name_spouse,
            'last_name_spouse' => $this->last_name_spouse,
            'dni_spouse' => $this->dni_spouse,
            'passport_spouse' => $this->passport_spouse,
            'birth_date_spouse' => $this->birth_date_spouse,
            'email_spouse' => $this->email_spouse,
            'phone1_spouse' => $this->phone1_spouse,
            'phone2_spouse' => $this->phone2_spouse,
            'city' => $this->city,
            'canton' => $this->canton,
            'parish' => $this->parish,
            'principal_street' => $this->principal_street,
            'secundary_street' => $this->secundary_street,
            'reference_place' => $this->reference_place,
//            'name_reference'=>$this->name_reference,
//            'last_name_reference'=>$this->last_name_reference,
//            'dni_reference'=>$this->dni_reference,
//            'relationship'=>$this->relationship,
//            'time_to_meet'=>$this->time_to_meet,
//            'instruction_reference'=>$this->instruction_reference
        ];
        $member->update($data_member);
        $detail->update($data_deatil);
        $this->alert('success', 'Registro actualizado con exíto!');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Member::find($id)->delete();
        $dt = DetailMember::where('member_id', $id)->first();
        $dt->delete();
        $this->resetInputFields();
        $this->alert('success', 'Registro eliminado con exíto!', [
            'position' => 'bottom-end']);
    }


#region REFERENCES CRUD
    public function storeReference()
    {
        $this->validate([
            'name_ref'=>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'last_name_ref'=>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'dni_ref'=>'required|numeric|digits:10',
            'relationship_ref'=>'required',
            'instruction_ref'=>'required',
            'time_to_meet_ref'=>'required',
        ],[
            'name_ref.required'=>'Campo obligatoio.',
            'name_ref.regex'=>'Campo inválido.',
            'last_name_ref.required'=>'Campo obligatoio.',
            'dni_ref.required'=>'Campo obligatoio.',
            'dni_ref.numeric'=>'Campo inválido.',
            'dni_ref.digits'=>'Campo inválido.',
            'relationship_ref.required'=>'Campo obligatoio.',
            'instruction_ref.required'=>'Campo obligatoio.',
            'time_to_meet_ref.required'=>'Campo obligatoio.',
        ]);
        if($this->member_id != null){
            $data = [
                'member_id' => $this->member_id,
                'name' => $this->name_ref,
                'last_name' => $this->last_name_ref,
                'dni' => $this->dni_ref,
                'relationship' => $this->relationship_ref,
                'time_to_meet' => $this->time_to_meet_ref,
                'instruction' => $this->instruction_ref
            ];
            MemberReference::create($data);
            $this->resetInputFieldsRef();
            $this->alert('success', 'Referencia agregada con exito.', ['showCancelButton' => false,]);
        }else{
            $this->alert('warning', 'Seleccione o Registre un miembro.', ['showCancelButton' => false,]);
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
        $this->relationship_ref = $reference->relationship;
        $this->instruction_ref = $reference->instruction;
        $this->time_to_meet_ref = $reference->time_to_meet;
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

}
