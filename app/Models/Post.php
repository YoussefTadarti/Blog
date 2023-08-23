<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use HasFactory;

    public $translatedAttributes = ['title', 'content', 'smallDesc'];
    protected $fillable = ['id', 'image', 'user_id', 'category_id', 'created_at', 'updated_at', 'deleted_at'];
}
