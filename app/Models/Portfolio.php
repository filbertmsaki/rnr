<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Portfolio extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'services',
        'client',
        'location',
        'date',
        'description',
        'arrangement'
    ];

    protected $appends = ['file'];

    public $incrementing = false;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->arrangement = self::arrangement($model->arrangement);
        });
        static::updating(function ($model) {
        });
    }
    public static function arrangement($arr)
    {
        $newID = $arr;
        while (Portfolio::where('arrangement', $newID)->count() > 0) {
            $portifolios = Portfolio::where('arrangement', '>=', $newID)->get();
            foreach ($portifolios as $portifolio) {
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

        $disk = 'public';
        if ($disk == 's3') {
            $fileName =  $file;
        } else {
            $fileName = asset('storage/' .  $file);
        }
        return Attribute::make(
            get: fn () =>  $fileName,
        );
    }
}
