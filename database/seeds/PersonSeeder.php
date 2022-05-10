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
        $people=[
            [
                'first_name'=>'Giuseppe',
                'last_name'=>'Mirizzi',
                'age'=>27
            ],
            [
                'first_name'=>'Mirko',
                'last_name'=>'Moschella',
                'age'=>27                                                                                                                                    
            ],
            [
                'first_name'=>'Aldo',
                'last_name'=>'Coccurullo',
                'age'=>18                                                                                                                                                                                                                        
            ],
            [
                'first_name'=>'Camilla',
                'last_name'=>'Palombi',
                'age'=>25
            ],
            [
                'first_name'=>'Anthony',
                'last_name'=>'Cecconi',
                'age'=>26
            ]
        ];
        foreach ($people as $person) {
            $newPerson= new Persons();
            $newPerson->first_name=$person['first_name'];
            $newPerson->last_name=$person['last_name'];
            $newPerson->age=$person['age'];
            $newPerson->save();
        };
    }
}