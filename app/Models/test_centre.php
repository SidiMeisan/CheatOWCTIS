<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_centre extends Model
{
    use HasFactory;

    /**
     * The attributes to assign tabble name
     */
    protected $table = 'test_centre';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name',
    ];
}
