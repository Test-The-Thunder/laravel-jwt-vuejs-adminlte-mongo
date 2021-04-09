<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MongoTest extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_tests';
}
