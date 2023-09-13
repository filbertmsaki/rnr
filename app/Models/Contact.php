<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->name = ucwords(strtolower(trim($model->name)));
            $model->message = ucwords(strtolower($model->message));
        });
        static::updating(function ($model) {
            $model->name = ucwords(strtolower(trim($model->name)));
            $model->message = ucwords(strtolower($model->message));
        });
    }
}
