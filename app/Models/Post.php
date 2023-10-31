<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

public function user() { //change this
    return $this->hasOne(User::class);
}

public function thread() {
    return $this->hasOne(Thread::class);
}

}
