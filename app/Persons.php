<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $person = [
        'first_name',
        'second_name',
        'age'
    ];
}
