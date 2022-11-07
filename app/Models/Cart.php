<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Cart extends Model implements HasMedia

{
    use HasFactory,Sluggable,InteractsWithMedia;

    protected $append = ['gallery'];

    protected $fillable = [
        'product_name',
        'quantity',
        'price',
        'user_ip',

    ];

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_name');
    }

    public function category()
    {
        return $this->belongsTo(Tb_productcate::class);
    }

    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
