<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $connection = 'news_db';

    protected $table = 'comment';

    public $timestamps = false;
}
