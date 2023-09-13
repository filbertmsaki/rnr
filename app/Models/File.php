<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class File extends Model
{
    use HasFactory;
    public $fillable = [
        'filed_type',
        'filed_id',
        'file'
    ];
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function filed()
    {
        return $this->morphTo();
    }

    public function photo(): Attribute
    {
        $disk = 'public';
        if ($disk == 's3') {
            $fileName = $this->file;
        } else {
            $fileName = asset('storage/'.$this->file);
        }


        return Attribute::make(
            get: fn () =>   $fileName,
        );
    }
}
