<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_key',
        'soft_delete',
        'name',
        'image',
        'note',
        'session_id'
    ];

    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id');
    }

    public function Subcategory()
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }
}
