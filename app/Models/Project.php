<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;

    protected $fillable = [
        'id', 'name', 'description','completed','created_at', 'updated_at'
    ];

    protected $casts = [
        'completed' => 'boolean',
    ];
    protected $attributes = [
        'completed' => false,

    ];
}
