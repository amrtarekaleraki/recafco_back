<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'products';


    protected $guarded = ['id'];

    public $translatable = ['title','description'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

}
