<?php

use Illuminate\Database\Seeder;
use App\Persons;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert(
        $people=[
            [
                'first_name'=>'Giuseppe',
                'second_name'=>'Mirizzi',
                'age'=>27
            ],
            [
                'first_name'=>'Mirko',
                'second_name'=>'Moschella',
                'age'=>27                                                                                                                                    
            ],
            [
                'first_name'=>'Aldo',
                'second_name'=>'Coccurullo',
                'age'=>18                                                                                                                                                                                                                        
            ],
            [
                'first_name'=>'Camilla',
                'second_name'=>'Palombi',
                'age'=>25
            ],
            [
                'first_name'=>'Anthony',
                'second_name'=>'Cecconi',
                'age'=>26
            ]
            ]);
    }
}
