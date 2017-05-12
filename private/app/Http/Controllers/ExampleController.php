<?php

namespace App\Http\Controllers;

use App\Tplagu;
class ExampleController extends Controller
{
    public function index() 
    {
        return app('db')->select("select * from tp_lagu");
    }
}
