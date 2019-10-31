<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index(){
        $records = Person::limit(20)
            ->orderBy('name','asc')
            ->get();
        
        return $records;
    } 
}
