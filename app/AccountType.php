<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $fillable = [
        'visibility_id',
        'name'
    ];
}
