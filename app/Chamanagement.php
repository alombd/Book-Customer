<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamanagement extends Model
{
    protected $fillable = [
        'cha_number','credit_name', 'debtor_name'
    ];
}
