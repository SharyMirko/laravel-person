<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $person = [
        'first_name',
        'second_name',
        'age'
    ];
    protected $table='persons';
}
