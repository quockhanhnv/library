<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Subject extends Model
{
     use SoftDeletes;

     protected $table = 'subjects';

     protected $fillable = ['subjects_name', 'subjects_credits', 'subjects_major_id', 'subjects_created_by', 'subjects_updated_by', 'active'];

      protected $dates = ['deleted_at'];
}
