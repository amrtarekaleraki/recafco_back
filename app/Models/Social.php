<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Social extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'socials';

    protected $guarded = ['id'];

    public $translatable = ['factory_location','office_location'];

}
