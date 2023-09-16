<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_key',
        'soft_delete',
        'image',
        'note',
        'name',
        'name_two'
    ];

    public function category()
    {
        return $this->hasMany(Category::class, 'session_id');
    }
}
