<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
   protected $fillable = [
        'name', 'descrition', 'company_id','user_id','days',
    ]; //
}
