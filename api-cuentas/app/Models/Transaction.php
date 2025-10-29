<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
      protected $fillable = [
        'ammount',
        'type',
        'description',
        'user_id',
        'category_id',
        'account_id',
    ];
}
