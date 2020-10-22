<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public $fillable = ['con_name', 'con_email', 'con_message', 'inquiry'];
}
