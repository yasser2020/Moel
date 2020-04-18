<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use Illuminate\Support\Facades\Storage;
class Offers extends Model
{
    
   protected $fillable=['name','description','path'];
   protected $appends=['image_path'];
   protected $casts = ['path' => 'array'];


    public function getImage($path)
    {
        return Storage::url('app/public/images/'.$path);
    }
}
