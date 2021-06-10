<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
class Users extends Component
{
    public $name,$last_name,$url_image,$phone,$address,$email,$password,$confirm_password,$gender="Masculino",$status=true,$user_id;
    public $action = "POST";
    public function render()
    {
        $users = User::orderBy('name','ASC')->get();
        return view('livewire.users.users',compact('users'))
        ->extends('layouts.app')
        ->section('subcontent');
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        if($user){
            $this->name = $user->name;
            $this->last_name = $user->last_name;
            $this->url_image = $user->url_image;
            $this->phone = $user->phone;
            $this->address = $user->address;
            $this->email = $user->email;
            $this->gender = $user->gender;
            $this->status = $user->status;
            $this->user_id = $user_id;
            $this->action = "PUT";
            $this->alert('success', 'Registro cargados exitosamente');
            return;
        }
        $this->action = "POST";
        $this->alert('success', 'No se encontrarón registros para mostrar');
    }
    public function store()
    {
        $this->validation();
        $data = [
            'name'=> $this->name,
            'last_name'=> $this->last_name,
            'url_image'=> $this->url_image,
            'phone'=> $this->phone,
            'address'=> $this->address,
            'email'=> $this->email,
            'password'=>Hash::make($this->password) ,
            'photo'=> $this->url_image,
            'gender'=> $this->gender,
            'active'=> $this->status,
            'status'=> $this->status
        ];
        $user = User::create($data);
        $this->alert('success', 'Registro creado exitosamente');
    }
    public function update()
    {
        $this->validation();
        $data = [
            'name'=> $this->name,
            'last_name'=> $this->last_name,
            'url_image'=> $this->url_image,
            'phone'=> $this->phone,
            'address'=> $this->address,
            'email'=> $this->email,
            'photo'=> $this->url_image,
            'gender'=> $this->gender,
            'active'=> $this->status,
            'status'=> $this->status
        ];
        $user = User::find($this->user_id);
        if($user){
            $user->update($data);
            $this->alert('success', 'Registro actualizado exitosamente');
            return;
        }
        $this->alert('success', 'No se encontrarón registros para actualizar');
    }

    public function delete($user_id)
    {
     
        $user = User::find($user_id);
        if($user){
            $user->delete();
            $this->alert('success', 'Registro eliminado exitosamente');
            return;
        }
        $this->alert('success', 'No se encontrarón registros para eliminar');
    }
    public function resetFields()
    {
        $this->name="";
        $this->last_name="";
        $this->url_image="";
        $this->phone="";
        $this->address="";
        $this->email="";
        $this->password="";
        $this->confirm_password="";
        $this->gender="Masculino";
        $this->status=true;
        $this->user_id="";
        $this->action = "POST";
    }
    public function validation()
    {
        if($this->action=="POST"){
            $this->validate([
                'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
                'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
                'gender' => 'required',
                'status' => 'required',
                'phone' => 'required|digits:10|numeric',
                'address' => 'required',
                'email' => ['required', 'email', 'string','unique:users,email'],
                'password' => 'min:8|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:8',
            ], [
                'name.required' => 'Campo obligatorio.',
                'last_name.required' => 'Campo obligatorio.',
                'name.regex' => 'Campo inválido.',
                'last_name.regex' => 'Campo inválido.',
                'gender.required' => 'Campo obligatorio.',
                'status.required' => 'Campo obligatorio.',
                'phone.required' => 'Campo obligatorio.',
                'phone.numeric' => 'Campo inválido.',
                'phone.digits' => 'Campo inválido debe tener al menos 10 digitos.',
                'address.required' => 'Campo obligatorio.',
                'email.string' => 'Ingrese un email válido.',
                'email.required' => 'Campo obligatorio.',
                'email.email'=>'Campo inválido.',
                'email.unique'=>'El correo ya existe.',
                'password.min' => 'Campo inválido debe tener al menos 8 caracteres.',
                'password.required_with' => 'Las contraseñas son obligatorias.',
                'password.same' => 'Las contraseñas ingresadas no coinciden.',
                'confirm_password.min' => 'Las contraseñas debe tener almenos 8 caracteres.',
            ]);
        }else{
            $this->validate([
                'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
                'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
                'gender' => 'required',
                'status' => 'required',
                'phone' => 'required|digits:10|numeric',
                'address' => 'required',
                'email' => ['required', 'string', 'email',Rule::unique('users')->ignore($this->user)],
                'password' => 'min:8|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:8',
            ], [
                'name.required' => 'Campo obligatorio.',
                'last_name.required' => 'Campo obligatorio.',
                'name.regex' => 'Campo inválido.',
                'last_name.regex' => 'Campo inválido.',
                'gender.required' => 'Campo obligatorio.',
                'status.required' => 'Campo obligatorio.',
                'phone.required' => 'Campo obligatorio.',
                'phone.numeric' => 'Campo inválido.',
                'phone.digits' => 'Campo inválido debe tener al menos 10 digitos.',
                'address.required' => 'Campo obligatorio.',
                'email.required' => 'Campo obligatorio.',
                'email.string'=>'El email ingresado no es válido',
                'email.email'=>'Campo inválido.',
                'email.unique'=>'El correo ya existe.',
                'password.min' => 'Campo inválido debe tener al menos 8 caracteres.',
                'password.required_with' => 'Las contraseñas son obligatorias.',
                'password.same' => 'Las contraseñas ingresadas no coinciden.',
                'confirm_password.min' => 'Las contraseñas debe tener almenos 8 caracteres.',
            ]);
        }
    }
}
