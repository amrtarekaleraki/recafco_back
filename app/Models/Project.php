<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'projects';

    protected $guarded = ['id'];


    public $translatable = ['title','location','client','subtitle','description'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
