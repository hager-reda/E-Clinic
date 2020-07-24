<?php

use Illuminate\Database\Seeder;
use App\Models\Pain;


class PainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Pain::whereIn('name', ['chest pain','knee pain','headache'])->exists())
        {

        }else{
            Pain::create(['name' => 'chest pain']);
            Pain::create(['name' => 'knee pain']);
            Pain::create(['name' => 'headache']);
        }
    }
}
