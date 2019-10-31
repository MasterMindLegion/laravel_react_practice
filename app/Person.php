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
        $this->hasMany(Alias::class);
    }

    public function image() {
        $this->hasOne(Image::class);
    }
    public function status() {
        $this->hasOne(Status::class);
    }
}
