<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Fillable Example
    // protected $fillable = ['name', 'email', 'active'];
    
    // Guarded Example
    // $guarded = Opposite of Fillable
    protected $guarded = [];

    protected $attributes = [
        'active' => 0
    ];

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    // Relationship to Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            0 => 'Active',
            1 => 'Inactive',
            2 => 'In-progress',
        ];
    }
}
