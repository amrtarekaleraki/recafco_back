<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'jobs';

    protected $guarded = ['id'];

    public $translatable = ['title'];

}
