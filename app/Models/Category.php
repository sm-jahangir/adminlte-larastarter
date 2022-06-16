<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = ['id'];

    public function registerMediaCollections(): void
    {
        // image
        $this
            ->addMediaCollection('image')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('thumb')
                    ->width(100)
                    ->height(100);
            });
    }
    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    // Product Relation
    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
