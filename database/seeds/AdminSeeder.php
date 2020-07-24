<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( DB::table('users')->where('email','admin@admin.com')->exists())
        {
            
        }else{
            DB::table('users')->insert([
                'username' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),   
            ]);    
        }
      
        $admin = User::where('username','Admin')->first();
        $role= Role::where('name','admin')->first();
        $admin->assignRole($role);
    }
}
