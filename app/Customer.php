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
}
