<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/********add class extension */
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia;
/******** */


class BookCat extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;

    public function registerMediaCollections(): void {
        $this->addMediaCollection('Ebooks');
    }
    
    protected $table = 'book_cat';

    protected $fillable = [
        'Book_Titel',
        'booK_type',
        'booK_Summry',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/book-cats/'.$this->getKey());
    }
}
