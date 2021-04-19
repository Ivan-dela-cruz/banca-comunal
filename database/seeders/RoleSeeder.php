<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resetea el cache el los roles y permisos
        app()['cache']->forget('spatie.permission.cache');


        /// crea los permisos para el crud del roles
        ///
        Permission::create(['name' => 'create_role', 'modulo' => 'Roles', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_role', 'modulo' => 'Roles', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_role', 'modulo' => 'Roles', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_role', 'modulo' => 'Roles', 'alias' => 'Eliminar']);

        /// crea los permisos para el crud del usuario
        ///
        Permission::create(['name' => 'create_user', 'modulo' => 'Usuarios', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_user', 'modulo' => 'Usuarios', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_user', 'modulo' => 'Usuarios', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_user', 'modulo' => 'Usuarios', 'alias' => 'Eliminar']);

        /// crea los permisos para el crud del techier

        Permission::create(['name' => 'create_member', 'modulo' => 'Miembros', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_member', 'modulo' => 'Miembros', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_member', 'modulo' => 'Miembros', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_member', 'modulo' => 'Miembros', 'alias' => 'Eliminar']);


        /// role super admin
        $role = Role::create(['name' => 'SuperAdmin', 'description' => 'Rol de superadmin', 'status' => true]);
        //asignacion de los permisos al rol admin
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'Gerente', 'description' => 'Rol de gerente', 'status' => true]);
        $role = Role::create(['name' => 'Secretaria', 'description' => 'Rol de secretaria', 'status' => true]);

        $role = Role::create(['name' => 'Administrador', 'description' => 'Rol de administrador', 'status' => true]);
        //asignacion de los permisos al rol admin
        $role->givePermissionTo(Permission::all());

        ///crearmos el usario por defecto
        $user_password = Hash::make('superadmin');
        $user = User::create(['name' => 'superadmin', 'email' => 'superadmin@gmail.com', 'password' => $user_password,]);
        $user->assignRole('SuperAdmin');

        $user_password = Hash::make('root1234');
        $user2 = User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => $user_password,]);
        $user2->assignRole('Administrador');

    }
}
