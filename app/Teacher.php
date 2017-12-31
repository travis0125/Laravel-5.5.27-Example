<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
        'professional',
        'url',
        'employed_at'
    ];

    public function scopeEmployed($query) {
        $query->where('employed_at','>',Carbon::now());
    }

    public function setEmployedAtAttribute($date) {
        $this->attributes['employed_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
}