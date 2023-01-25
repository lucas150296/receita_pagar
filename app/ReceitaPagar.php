<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceitaPagar extends Model
{
    protected $fillable = [
        'description',
        'clientName',
        'value',
        'dueDate',
        'payDate',
        'status'
    ];
}
