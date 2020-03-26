<?php

namespace App;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable=['name','description','path'];
   protected $appends=['image_path'];
   protected $casts = ['path' => 'array'];


    public function getImage($path)
    {
        return Storage::url('images/'.$path);
    }
    
   
}
