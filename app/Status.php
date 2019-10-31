<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alias;
use App\Image;
use App\Person;

class Status extends Model
{
    protected $table = 'statuses';
   
    public function person() {
        $this->belongsToMany(Person::class);
    }
}
