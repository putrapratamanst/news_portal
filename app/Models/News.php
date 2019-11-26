<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $connection = 'news_db';

    protected $table = 'news';

    public $timestamps = false;
}
