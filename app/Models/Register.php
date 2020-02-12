<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';

     protected $primaryKey = 'register_id';
     
    protected $fillable = ['register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id'];
}
