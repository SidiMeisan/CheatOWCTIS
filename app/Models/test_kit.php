<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_kit extends Model
{
    use HasFactory;
    
    /**
     * The attributes to assign tabble name
     */
    protected $table = 'test_kit';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'test_centre_id',
        'name',
        'available',
    ];

    /**
     * Get the Centre that owns the test_kit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Centre()
    {
        return $this->belongsTo(test_centre::class, 'test_centre_id', 'id');
    }
}
