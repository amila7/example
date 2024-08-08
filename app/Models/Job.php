<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class job extends Model {
    // public static function all(){

    // }

    public static function find(int $id): array
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);
    }

}
