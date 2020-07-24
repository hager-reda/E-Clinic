<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Role::whereIn('name', ['admin','doctor','patient'])->exists())
        {

        }else{
             Role::create(['name' => 'admin']);
             Role::create(['name' => 'doctor']);
            Role::create(['name' => 'patient']);
        }
    }
}
