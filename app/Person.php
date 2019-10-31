<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alias;
use App\Image;
use App\Status;

class Person extends Model
{
    protected $table = 'people';
    

    public function aliases() {
        return $this->hasMany(Alias::class);
    }

    public function image() {
        return $this->hasOne(Image::class, 'id', 'img_id');
    }
    public function status() {
        return $this->hasOne(Status::class);
    }
}