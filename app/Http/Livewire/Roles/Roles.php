<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as HasRoles;

class Roles extends Component
{
    public  $roles,$permissions,$name, $description, $status=true, $data_id;
    public $select_permissions  = [];
    public $confirming, $action = 'POST',$role = [];
    public $color="yellow";
    public function render()
    {
        $this->roles = HasRoles::all();
        $this->permissions = Permission::all();
       //->groupBy('modulo')
        return view('livewire.roles.roles')
        ->extends('layouts.app')
        ->section('subcontent');
    }

    public function resetInputFields()
    {
    	$this->name = '';
    	$this->description = '';
        $this->status = '';
        $this->select_permissions  = [];
        $this->action = 'POST';
        $this->role = [];
    
    }

    public function store()
    {
    	$validation = $this->validate([
    		'name'	=>	'required',
    		'description' => 'required',
    		'status' => 'required'
        ]);
      // dd($this->select_permissions);
        $role = HasRoles::create($validation);
        $role->save();
        $role->syncPermissions($this->select_permissions);

        $this->alert('success', 'Rol registrado exitosamente!',[ 'showCancelButton' =>  false, ]);
        $this->resetInputFields();
        $this->action = 'POST';
        $this->emit('Success');
    }

    public function edit($id)
    {
        $data = HasRoles::findOrFail($id);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->status = $data->status;
        $this->data_id = $id;
        $this->role=$data;
        $permissions = $data->permissions->pluck('id');
        
        $data_list = [];
        $list = [];
        $cont=1;
        $p_list = Permission::all('id');
        foreach($p_list as $per){
            if(count($permissions)>0){
                $var_temp = false;
                foreach ($permissions as $k => $v){
                    if($per->id == $v){
                      
                       $var_temp = $v;
                        unset($permissions[$k]);
                        break;
                    }else{
                        $var_temp = false;
                    }
                }
                $data_list[$cont] =  $var_temp;
               
                $cont ++;
            }else{
                $data_list[$cont] = false;
                $cont ++;
            }
        }
        $this->select_permissions =  $data_list;
        $this->action = 'PUT';
    }

    public function update()
    {
        $validate = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $role = HasRoles::find($this->data_id);

        $role->update([
            'name' => $this->name,
            'description'  =>  $this->description,
            'status' =>  $this->status
        ]);
         // revocamos todos los permisos otorgados
        $role->revokePermissionTo(Permission::all());
        // sincronizar los nuevos permisos
        $role->syncPermissions($this->select_permissions);
        
        $this->resetInputFields();
        $this->action = 'POST';
        $this->alert('success', 'Rol actualizado exitosamente!',[ 'showCancelButton' =>  false, ]);
    }

    public function delete($id)
    {
       HasRoles::find($id)->delete();
        $this->alert('success', 'Rol eliminado exitosamente!',[ 'showCancelButton' =>  false, ]);
        $this->resetInputFields();
        $this->action = 'POST';
    }
    public function confirmDelete($id)
    {
        $this->confirming = $id;
        $this->color = "red";
       
    }
}
