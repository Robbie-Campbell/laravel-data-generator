<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];
}
