<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class staff_prints extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'staff_id',
        'is_active',
    ];

    public function staff()
    {
        return $this->belongsTo(staff::class);
    }

    protected $casts = [
        'is_admin' => 'boolean',
    ];
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('staff_img')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }


}
