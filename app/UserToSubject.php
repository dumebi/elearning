<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserToSubject extends Model
{
    protected $increments = false;
    public $timestamps = false;

    protected $fillable = ['user_id', 'subject_id'];
}
