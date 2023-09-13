<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'title',
        'description',
        'arrangement',
        'cover_photo',
        'secure_token',
        'short_description'
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->title = ucwords(strtolower(trim($model->title)));
            $model->arrangement = self::arrangement($model->arrangement);
            $model->secure_token = unique_slug($model->title);
        });
        static::updating(function ($model) {
            $model->title = ucwords(strtolower(trim($model->title)));
            $model->secure_token = unique_slug($model->title);
            $model->arrangement = self::arrangement($model->arrangement);

        });
    }

    public static function arrangement($arr)
    {
        $newID = $arr;
        while (Service::where('arrangement', $newID)->count() > 0) {
            $service = Service::where('arrangement', '>=', $newID)->get();
            foreach ($service as $portifolio) {
                $portifolio->update([
                    'arrangement' => $portifolio->arrangement + 1
                ]);
            }
        }
        return $newID;
    }
    public function files()
    {
        return $this->morphMany(File::class, "filed");
    }



    public function file(): Attribute
    {
        $file = null;
        if ($this->files()->count()) {
            $file = $this->files[0]->file;
        }
        return Attribute::make(
            get: fn () =>  $file,
        );
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
