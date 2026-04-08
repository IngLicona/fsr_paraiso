<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class MaestrosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Maestros seeders
        Permission::create(['name' => 'maestros.index']);
        Permission::create(['name' => 'maestros.create']);
        Permission::create(['name' => 'maestros.edit']);
    }
}
