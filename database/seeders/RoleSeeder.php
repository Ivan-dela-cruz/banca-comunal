<?php

namespace Database\Seeders;


use App\Models\AccountClient;
use App\Models\ConfigTable;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Member;
use App\Models\MemberReference;
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

        Permission::create(['name' => 'create_accountancy', 'modulo' => 'Contaduría', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_accountancy', 'modulo' => 'Contaduría', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_accountancy', 'modulo' => 'Contaduría', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_accountancy', 'modulo' => 'Contaduría', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_request', 'modulo' => 'Solicitudes de Crédito', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_request', 'modulo' => 'Solicitudes de Crédito', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_request', 'modulo' => 'Solicitudes de Crédito', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_request', 'modulo' => 'Solicitudes de Crédito', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_visit', 'modulo' => 'Visita de Asesor', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_visit', 'modulo' => 'Visita de Asesor', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_visit', 'modulo' => 'Visita de Asesor', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_visit', 'modulo' => 'Visita de Asesor', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_contribution', 'modulo' => 'Aportes', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_contribution', 'modulo' => 'Aportes', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_contribution', 'modulo' => 'Aportes', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_contribution', 'modulo' => 'Aportes', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_credit', 'modulo' => 'Créditos', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_credit', 'modulo' => 'Créditos', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_credit', 'modulo' => 'Créditos', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_credit', 'modulo' => 'Créditos', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_transactions', 'modulo' => 'Transacciones', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_transactions', 'modulo' => 'Transacciones', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_transactions', 'modulo' => 'Transacciones', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_transactions', 'modulo' => 'Transacciones', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_notebook', 'modulo' => 'Libretas', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_notebook', 'modulo' => 'Libretas', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_notebook', 'modulo' => 'Libretas', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_notebook', 'modulo' => 'Libretas', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_simulator', 'modulo' => 'Simulador', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_simulator', 'modulo' => 'Simulador', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_simulator', 'modulo' => 'Simulador', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_simulator', 'modulo' => 'Simulador', 'alias' => 'Eliminar']);

        Permission::create(['name' => 'create_payment', 'modulo' => 'Pagos', 'alias' => 'Crear']);
        Permission::create(['name' => 'read_payment', 'modulo' => 'Pagos', 'alias' => 'Leer']);
        Permission::create(['name' => 'update_payment', 'modulo' => 'Pagos', 'alias' => 'Modificar']);
        Permission::create(['name' => 'destroy_payment', 'modulo' => 'Pagos', 'alias' => 'Eliminar']);


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


        //0545223000001
        for ($i = 1; $i < 10; $i++) {
            Member::create([
                'doc_type' => 'Cédula',
                'doc_number' => '012345678' . $i,
                'name' => 'Miembro',
                'last_name' => 'Miembro',
                'instruction' => 'instruction',
                'birth_place' => 'lugar',
                'country' => 'pais',
                'birth_date' => '2000-12-02',
                'marital_status' => 'soltero',
                'gender' => 'Masculino',
                'email' => 'm' . $i . '@email.com',
                'phone1' => '0123456789',
                'phone2' => '0123456789',
                'reference_place' => 'direccion',
                'member_type' => 'cliente',
                'account_number' => '054522300000' . $i
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            AccountClient::create([
                'member_id'=> $i,
                'code'=> '0545223',
                'number' => '054522300000' . $i,
                'sec' => '1',
                'type' => 'cliente',
            ]);
            $config = ConfigTable::where('identifier','cliente')->first();
            $config->update([
                'secuence'=>$i
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            MemberReference::create([
                'member_id' => rand(1, 9),
                'name' => 'Reference ' . $i,
                'last_name' => 'Reference',
                'dni' => '013345678' . $i,
                'relationship' => 'Reference',
                'instruction' => 'instruction',
                'time_to_meet' => '1 year 2 days',
            ]);
        }

    }
}
