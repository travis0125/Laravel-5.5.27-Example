<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Teacher
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $professional
 * @property string $url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $employed_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher employed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereEmployedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereProfessional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUrl($value)
 * @mixin \Eloquent
 */
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