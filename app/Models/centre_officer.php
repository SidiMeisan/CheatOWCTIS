<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centre_officer extends Model
{
    use HasFactory;

    /**
     * The attributes to assign tabble name
     */
    protected $table = 'centre_officer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'test_centre_id',
        'position',
    ];

    public $timestamps = false;
}
