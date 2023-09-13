<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Testimony extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'name',
        'position',
        'company',
        'description',
        'arrangement',
        'profile_url',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
        static::updating(function ($model) {
        });
    }
}
