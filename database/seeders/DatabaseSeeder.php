<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 🔹 Crear roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $maestroRole = Role::firstOrCreate(['name' => 'maestro']);
        $alumnoRole = Role::firstOrCreate(['name' => 'alumno']);

        // 🔹 ADMIN
        $admin = User::firstOrCreate(
            ['email' => 'admin@fsr.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('1234'),
            ]
        );
        $admin->assignRole($adminRole);

        // 🔹 MAESTRO
        $maestro = User::firstOrCreate(
            ['email' => 'maestro@fsr.com'],
            [
                'name' => 'Maestro',
                'password' => Hash::make('1234'),
            ]
        );
        $maestro->assignRole($maestroRole);

        // 🔹 ALUMNO
        $alumno = User::firstOrCreate(
            ['email' => 'alumno@fsr.com'],
            [
                'name' => 'Alumno',
                'password' => Hash::make('1234'),
            ]
        );
        $alumno->assignRole($alumnoRole);
    }
}