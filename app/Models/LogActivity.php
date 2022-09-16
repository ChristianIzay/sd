<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    use HasFactory;

    protected $fillable =[
        'log_name', 'user_id', 'log_date', 'table_name', 'log_type', 'data'
    ];
}
