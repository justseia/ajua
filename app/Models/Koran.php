<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Koran extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'korans';
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
