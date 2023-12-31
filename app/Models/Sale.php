<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'unique_key',
        'soft_delete',
        'bill_no',
        'date',
        'time',
        'sales_type',
        'employee_id',
        'sub_total',
        'tax',
        'total',
        'payment_method'
    ];


}
