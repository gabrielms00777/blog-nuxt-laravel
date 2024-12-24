<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = [
        'user_id',
        'auditable_type',
        'auditable_id',
        'action',
        'old_value',
        'new_value',
        // 'model',
        // 'model_id',
        // 'changes',
        'ip_address',
    ];

    protected $casts = [
        // 'changes' => 'array', 
        'old_data' => 'array',
        'new_data' => 'array',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
