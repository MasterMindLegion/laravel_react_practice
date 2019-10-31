<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;
use App\Image;
use App\Status;
class Alias extends Model
{
    protected $table = 'aliases';


    public function person() {
        $this->belongsTo(Person::class);
    }
}
