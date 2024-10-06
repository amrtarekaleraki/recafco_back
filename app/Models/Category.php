<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'categories';

    protected $guarded = ['id'];

    public $translatable = ['title'];


    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
