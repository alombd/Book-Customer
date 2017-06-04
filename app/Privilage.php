<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilage extends Model
{
        protected $fillable = [
         'module_id','user_id'
    ];
}
