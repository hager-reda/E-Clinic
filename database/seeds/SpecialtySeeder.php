<?php

use Illuminate\Database\Seeder;
use App\Models\Specialty;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Specialty::whereIn('name', ['ENT','Cardiology','Pediatric'])->exists())
        {

        }else{
            Specialty::create(['name' => 'ENT']);
            Specialty::create(['name' => 'Cardiology']);
            Specialty::create(['name' => 'Pediatric']);
        }
    }
}
