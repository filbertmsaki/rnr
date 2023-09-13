<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'secure_token'];
    public $incrementing = false;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->secure_token = unique_slug($model->name);
        });
        static::updating(function ($model) {
            $model->secure_token = unique_slug($model->name);
        });
    }

    public function posts()
    {
        return $this->belongsToMany(Category::class, PostCategory::class);
    }
}
