<?php

namespace App\Http\Controllers;

use App\Models\MongoTest;
use Illuminate\Http\Request;

class MongoTestController extends Controller
{
    function mongodata()
    {
        return MongoTest::all();
    }
}
