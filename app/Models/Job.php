<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class job extends Model {

    protected $table = 'job_listings';

    protected $fillable =['title', 'salary'];

}
