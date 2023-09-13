<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'secure_token', 'short_description', 'description', 'cover_photo'];
    public $incrementing = false;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->secure_token = unique_slug($model->title);
        });
        static::updating(function ($model) {
            $model->secure_token = unique_slug($model->title);
        });
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, PostCategory::class);
    }
    public function files()
    {
        return $this->morphMany(File::class, "filed");
    }

    public function photo(): Attribute
    {
        $disk = 'public';
        if ($disk == 's3') {
            $fileName = $this->cover_photo;
        } else {
            $fileName = asset('storage/'.$this->cover_photo);
        }


        return Attribute::make(
            get: fn () =>   $fileName,
        );
    }
}
