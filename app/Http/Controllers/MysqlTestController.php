<?php

namespace App\Http\Controllers;

use App\Models\MysqlTest;
use Illuminate\Http\Request;

class MysqlTestController extends Controller
{
    function mysqldata()
    {
        return MysqlTest::all();
    }
}
