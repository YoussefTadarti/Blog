<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;
    use HasFactory;

    public $translatedAttributes = ['title', 'content', 'address'];
    protected $fillable = [
        'id', 'logo', 'favicon', 'facebook', 'instagram', 'phone', 'email', 'created_at', 'updated_at',
        'deleted_at'
    ];

    // check Settings
    public static function checkSettings()
    {
        $settings = self::all();
        if (count($settings) < 1) {
            $data = [];

            foreach (config("translatable.languages") as $lang_short => $lang) {
                $data[$lang_short]['title'] = $lang;
            }
            self::create($data);
        }
        return self::first();
    }
}
