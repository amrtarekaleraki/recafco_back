<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Certificate extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $table = 'certificates';

    protected $guarded = ['id'];

    public $translatable = ['title'];


}